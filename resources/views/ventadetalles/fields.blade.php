<!-- Idventa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idventa', 'Idventa:') !!}
    {!! Form::number('idventa', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    {!! Form::number('idproducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Prec Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prec_unit', 'Prec Unit:') !!}
    {!! Form::number('prec_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Tot Tot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tot_tot', 'Tot Tot:') !!}
    {!! Form::number('tot_tot', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::text('observacion', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventadetalles.index') }}" class="btn btn-default">Cancel</a>
</div>
