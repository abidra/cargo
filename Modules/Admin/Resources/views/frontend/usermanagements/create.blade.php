@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1>SOO</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('users.index') }}">Users</a></li>
        <li class="active">Tambah User</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @include('layouts._flash')
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#isiform" data-toggle="tab">Isi Form</a></li>
                    <li><a href="#uploadexcel" data-toggle="tab">Upload Excel</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="isiform">
                        {!! Form::open(['url'=>route('users.store'), 'method'=>'POST',
                            'class'=>'form-horizontal', 'files'=>true]) !!}
                            @include('users._form')
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane active" id="uploadexcel">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection