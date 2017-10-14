<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 2/2/2017
 * Time: 11:39 AM
 */

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Routing\Controller;
use App\User;
use App\Role;
use Validator;

class UsermanagementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $request->user()->authorizeRoles(['super_admin', 'admin_utama']);
        if ($request->ajax()) {
//            $users = Role::where('name','admin')->first()->users();
            $users = User::whereHas('get_roles', function($q){
                $q->where('name','!=','super_admin');
            })->get();
            return Datatables::of($users)
                ->addColumn('role', function($user) {
                    return $user->roles[0]['display_name'];
                })
//                ->addColumn('cluster', function($user) {
//                    return $user->cluster->desc;
//                })
                ->addColumn('action', function($user) {
                    return view('admin::datatables._action3', [
                        'edit_url' => route('usermanagements.edit', $user->id),
                        'model' => $user,
                        'form_url' => route('usermanagements.destroy', $user->id),
                        'confirm_message' => 'Anda yakin ingin menghapus '.$user->title.'?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'id','name'=>'id','title'=>'ID'])
            ->addColumn(['data'=>'name','name'=>'name','title'=>'Nama'])
            ->addColumn(['data'=>'username','name'=>'username','title'=>'Username'])
            ->addColumn(['data'=>'email','name'=>'email','title'=>'Email'])
            ->addColumn(['data'=>'role','name'=>'role','title'=>'Role'])
            ->addColumn(['data'=>'action','name'=>'action','title'=>'','searchable'=>false,'orderable'=>false]);

        return view('admin::frontend.usermanagements.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'branch_id' => 'required|exists:branches,id',
            'cluster_id' => 'required|exists:clusters,id',
        ]);

        $soo_role = Role::where('name','soo');
        $user = User::create($request->all());
        $user->attachRole($soo_role);

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil menyimpan '. $user->name
        ]);

        return redirect()->route('usermanagements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('usermanagements.show')->with(compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin::frontend.usermanagements.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$user->id.',id',
            'email' => 'required|email',
            'role' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = Role::where('id', $request->role)->get()->first();
        $user->update($request->except('role'));
//        $user->save();
//        $user->detachRole($soo_role);
        $user->detachRoles($user->roles);
//        $user->roles()->sync($soo_role);
        $user->attachRole($role);

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil menyimpan '.$user->name
        ]);

        return redirect()->route('usermanagements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'User berhasil dihapus'
        ]);

        return redirect()->route('usermanagements.index');
    }
}