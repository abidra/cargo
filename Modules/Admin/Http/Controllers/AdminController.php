<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['tasks'] = [
            [
                'name' => 'Design New Dashboard',
                'progress' => '87',
                'color' => 'danger'
            ],
            [
                'name' => 'Create Home Page',
                'progress' => '76',
                'color' => 'warning'
            ],
            [
                'name' => 'Some Other Task',
                'progress' => '32',
                'color' => 'success'
            ],
            [
                'name' => 'Start Building Website',
                'progress' => '56',
                'color' => 'info'
            ],
            [
                'name' => 'Develop an Awesome Algorithm',
                'progress' => '10',
                'color' => 'success'
            ]
        ];
        return view('admin::frontend.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    public function invoice()
    {
      return view('admin::frontend.invoice');
    }
    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
