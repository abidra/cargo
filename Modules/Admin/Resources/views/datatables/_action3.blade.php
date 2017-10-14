{!! Form::model($model, ['url'=>$form_url, 'method'=>'delete', 'class'=>'form-inline js-confirm', 'data-confirm'=>$confirm_message]) !!}
<a href="{{ $edit_url }}">EDIT  <span class="glyphicon glyphicon-edit"></span></a>
{!! Form::close() !!}