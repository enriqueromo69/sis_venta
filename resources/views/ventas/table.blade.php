<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>Idcomprobante</th>
        <th>Numero</th>
        <th>Idcliente</th>
        <th>Sub Tot</th>
        <th>Igv Tot</th>
        <th>Tot Tot</th>
        <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->idcomprobante }}</td>
            <td>{{ $venta->numero }}</td>
            <td>{{ $venta->idcliente }}</td>
            <td>{{ $venta->sub_tot }}</td>
            <td>{{ $venta->igv_tot }}</td>
            <td>{{ $venta->tot_tot }}</td>
            <td>{{ $venta->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['ventas.destroy', $venta->idventa], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$venta->idventa]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ventas.edit', [$venta->idventa]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
