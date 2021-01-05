@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobantes
            </h2>

            <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th style="width:100px;" class="text-right">igv_tot</th>
                        <th style="width:160px;" class="text-right">Sub tot_tot</th>
                        <th style="width:160px;" class="text-right">tot_tot</th>
                        <th style="width:180px;" class="text-right">Creado</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $m)
                    <tr>
                        <td>
                            <a href="{{url('invoice/detail/' . $m->idventa )}}">
                                {{ $m->idclientes->razon_social }}
                            </a>
                        </td>
                        <td class="text-right">$ {{number_format($m->igv_tot, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->sub_tot, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->tot_tot, 2)}}</td>
                        <td class="text-right">{{ $m->created_at  }}</td>
                        <td class="text-right">
                            <a class="btn btn-success btn-block btn-xs" href="{{ url('invoice/pdf/' . $m->id) }}">
                                <i class="fa fa-file-pdf-o"></i> Descargar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
