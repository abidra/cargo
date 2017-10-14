<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Routing\Controller;
use App\User;
use App\Role;
use Validator;

class AdminsController extends Controller
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
//        echo $users;exit;
        if ($request->ajax()) {
//            $users = Role::where('name','admin')->first()->users();
            $users =  User::whereHas('get_roles', function($q){
                $q->whereIn('name', array('admin_karyawan','admin_utama'));
            })->get();
//            echo $users;exit;
            return Datatables::of($users)
                ->addColumn('action', function($user) {
                    return view('admin::datatables._action', [
                        'edit_url' => route('admins.edit', $user->id),
                        'model' => $user,
                        'form_url' => route('admins.destroy', $user->id),
                        'confirm_message' => 'Anda yakin ingin menghapus '.$user->title.'?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'id','name'=>'id','title'=>'ID'])
            ->addColumn(['data'=>'name','name'=>'name','title'=>'Nama'])
            ->addColumn(['data'=>'username','name'=>'username','title'=>'Username'])
            ->addColumn(['data'=>'email','name'=>'email','title'=>'Email'])
            ->addColumn(['data'=>'action','name'=>'action','title'=>'','searchable'=>false,'orderable'=>false]);

        return view('admin::frontend.admins.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::frontend.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required', 
            'username' => 'required|unique:users', 
            'email' => 'required',
//            'password' => 'required',
        ]);
        if ($validator->fails()) {
//            return redirect('admin/admins/create')
//                ->withErrors($validator)
//                ->withInput();
//            flash($validator->errors()->all()[0], 'danger');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = Role::where('name', 'admin_karyawan')->get()->first();
        $user = User::create($request->except('password'));
        $user->password = bcrypt('admin!');
        $user->save();
        $user->attachRole($role);

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil menyimpan '. $user->name
        ]);

        return redirect()->route('admins.index');
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
        return view('admin::frontend.admins.show')->with(compact('users'));
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
        return view('admin::frontend.admins.edit')->with(compact('user'));
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
//            'branch_id' => 'required|exists:branches,id',
//            'cluster_id' => 'required|exists:clusters,id',
//            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/admins/'.$user->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        /*$this->validate($request, [
            'name' => 'required', 
            'username' => 'required|unique:users,username,'.$user->id.',id', 
            'email' => 'required|email', 
//            'branch_id' => 'required|exists:branches,id',
//            'cluster_id' => 'required|exists:clusters,id',
            'password' => 'required',
        ]);*/

        $user->update($request->except('password'));
        $user->password = bcrypt($request->password);
        $user->save();

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil menyimpan '.$user->name
        ]);

        return redirect()->route('admins.index');
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

        return redirect()->route('admins.index');
    }
}
