<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name','Nama',['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control','readonly']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username','Username',['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('username', null, ['class'=>'form-control','readonly']) !!}
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email','Email',['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('email', null, ['class'=>'form-control','readonly']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    {!! Form::label('role','Role',['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('role', [''=>''] + App\Role::pluck('display_name','id')->all(),
        null, ['class'=>'form-control']) !!}
        {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>