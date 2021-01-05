<!-- Descrip Cmp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrip_cmp', 'Descrip Cmp:') !!}
    {!! Form::text('descrip_cmp', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Incial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incial', 'Incial:') !!}
    {!! Form::text('incial', null, ['class' => 'form-control','maxlength' => 5,'maxlength' => 5]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comprobantes.index') }}" class="btn btn-default">Cancel</a>
</div>
