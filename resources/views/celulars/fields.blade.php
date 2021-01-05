<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    {!! Form::number('idcliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('celulars.index') }}" class="btn btn-default">Cancel</a>
</div>
