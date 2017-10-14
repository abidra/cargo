{!! Form::model($model, ['url'=>$form_url, 'method'=>'put', 'class'=>'form-inline js-confirm', 'data-confirm'=>$confirm_message]) !!}
{{--{!! Form::submit('Setujui', ['class'=>'btn btn-xs btn-primary']) !!}--}}
<input type="hidden" name="id" value="<?php echo $id; ?>">
<button type="submit" class="btn btn-xs btn-primary">
    Setujui
    <span class="glyphicon glyphicon-check"></span>
</button>
{!! Form::close() !!}