<!-- Idventa Field -->
<div class="form-group">
    {!! Form::label('idventa', 'Idventa:') !!}
    <p>{{ $ventadetalle->idventa }}</p>
</div>

<!-- Idproducto Field -->
<div class="form-group">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    <p>{{ $ventadetalle->idproducto }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $ventadetalle->cantidad }}</p>
</div>

<!-- Prec Unit Field -->
<div class="form-group">
    {!! Form::label('prec_unit', 'Prec Unit:') !!}
    <p>{{ $ventadetalle->prec_unit }}</p>
</div>

<!-- Tot Tot Field -->
<div class="form-group">
    {!! Form::label('tot_tot', 'Tot Tot:') !!}
    <p>{{ $ventadetalle->tot_tot }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{{ $ventadetalle->observacion }}</p>
</div>

