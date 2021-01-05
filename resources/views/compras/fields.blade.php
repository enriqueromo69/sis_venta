<!-- Idcomprobante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcomprobante', 'Idcomprobante:') !!}
    {!! Form::select('idcomprobante', $comprobante,null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Idproveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idproveedor', 'Idproveedor:') !!}
    {!! Form::number('idproveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Tot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_tot', 'Sub Tot:') !!}
    {!! Form::number('sub_tot', null, ['class' => 'form-control']) !!}
</div>

<!-- Igv Tot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('igv_tot', 'Igv Tot:') !!}
    {!! Form::number('igv_tot', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('compras.index') }}" class="btn btn-default">Cancel</a>
</div>
