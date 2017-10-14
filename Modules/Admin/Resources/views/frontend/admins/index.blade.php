@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Admin</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Admin</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">List Account</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('layouts._flash')
                    <p><a href="{{ route('admins.create') }}" class="btn btn-primary">Tambah</a></p>
                    {!! $html->table(['class'=>'table table-bordered table-striped']) !!}
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

@section('scripts')
{!! $html->scripts() !!}
@endsection