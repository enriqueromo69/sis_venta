<!-- Descrip Doc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrip_doc', 'Descrip Doc:') !!}
    {!! Form::text('descrip_doc', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Caracteres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caracteres', 'Caracteres:') !!}
    {!! Form::text('caracteres', null, ['class' => 'form-control','maxlength' => 5,'maxlength' => 5]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoClies.index') }}" class="btn btn-default">Cancel</a>
</div>
