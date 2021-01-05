<!-- Idcomprobante Field -->
<div class="form-group">
    {!! Form::label('idcomprobante', 'Idcomprobante:') !!}
    <p>{{ $venta->idcomprobante }}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $venta->numero }}</p>
</div>

<!-- Idcliente Field -->
<div class="form-group">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    <p>{{ $venta->idcliente }}</p>
</div>

<!-- Sub Tot Field -->
<div class="form-group">
    {!! Form::label('sub_tot', 'Sub Tot:') !!}
    <p>{{ $venta->sub_tot }}</p>
</div>

<!-- Igv Tot Field -->
<div class="form-group">
    {!! Form::label('igv_tot', 'Igv Tot:') !!}
    <p>{{ $venta->igv_tot }}</p>
</div>

<!-- Tot Tot Field -->
<div class="form-group">
    {!! Form::label('tot_tot', 'Tot Tot:') !!}
    <p>{{ $venta->tot_tot }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{{ $venta->observacion }}</p>
</div>

