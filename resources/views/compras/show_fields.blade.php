<!-- Idcomprobante Field -->
<div class="form-group">
    {!! Form::label('idcomprobante', 'Idcomprobante:') !!}
    <p>{{ $compra->idcomprobante }}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $compra->numero }}</p>
</div>

<!-- Idproveedor Field -->
<div class="form-group">
    {!! Form::label('idproveedor', 'Idproveedor:') !!}
    <p>{{ $compra->idproveedor }}</p>
</div>

<!-- Sub Tot Field -->
<div class="form-group">
    {!! Form::label('sub_tot', 'Sub Tot:') !!}
    <p>{{ $compra->sub_tot }}</p>
</div>

<!-- Igv Tot Field -->
<div class="form-group">
    {!! Form::label('igv_tot', 'Igv Tot:') !!}
    <p>{{ $compra->igv_tot }}</p>
</div>

<!-- Tot Tot Field -->
<div class="form-group">
    {!! Form::label('tot_tot', 'Tot Tot:') !!}
    <p>{{ $compra->tot_tot }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{{ $compra->observacion }}</p>
</div>

