@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>User Management</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('usermanagements.index') }}">User Management</a></li>
        <li class="active">Edit User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Edit User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('layouts._flash')
                    {!! Form::model($user, ['url'=>route('usermanagements.update', $user->id),
                        'method'=>'PUT','class'=>'form-horizontal','files'=>true]) !!}
                        @include('admin::frontend.usermanagements._form')
                    {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection