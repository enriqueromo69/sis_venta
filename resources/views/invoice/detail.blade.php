@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobante # {{ str_pad ($model->idventa, 7, '0', STR_PAD_LEFT) }}
            </h2>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-6">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->idclientes->razon_social }}" />
                    </div>
                    <div class="col-xs-2">
                        <input class="form-control" type="text" readonly value={{ $model->idclientes->documento }} />
                    </div>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" readonly value={{ $model->idclientes->correo }} />
                    </div>
                </div>
            </div>

            <hr />

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th style="width:100px;">Cantidad</th>
                    <th style="width:100px;">P.U</th>
                    <th style="width:100px;">tot_tot</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($model->details as $d)
                    <tr>
                        <td>{{$d->idproductos->nombre}}</td>
                        <td class="text-right">{{$d->cantidad}}</td>
                        <td class="text-right">$ {{number_format($d->prec_unit, 2)}}</td>
                        <td class="text-right">$ {{number_format($d->tot_tot, 2)}}</td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><b>igv_tot</b></td>
                    <td class="text-right">$ {{ number_format($model->igv_tot, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right"><b>Sub tot_tot</b></td>
                    <td class="text-right">$ {{ number_format($model->sub_tot, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right"><b>tot_tot</b></td>
                    <td class="text-right">$ {{ number_format($model->tot_tot, 2) }}</td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
@endsection