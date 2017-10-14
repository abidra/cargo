@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1>Admin</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('admins.index') }}">Admin</a></li>
        <li class="active">Tambah Admin</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('layouts._flash')
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#isiform" data-toggle="tab">Isi Form</a></li>
                    {{--<li><a href="#uploadexcel" data-toggle="tab">Upload Excel</a></li>--}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="isiform">
                        {!! Form::open(['url'=>route('admins.store'), 'method'=>'POST',
                            'class'=>'form-horizontal', 'files'=>true]) !!}
                            @include('admin::frontend.admins._form')
                        {!! Form::close() !!}
                    </div>
                    {{--<div class="tab-pane active" id="uploadexcel">--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection