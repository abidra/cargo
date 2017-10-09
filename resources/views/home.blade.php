@extends('layouts.app')

@section('content')
<div class="box box-success">
    <!-- /.box-header -->
    <div class="box-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
<!-- /.box-body -->
</div>
@endsection
