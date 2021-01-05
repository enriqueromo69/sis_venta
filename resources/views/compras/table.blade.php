<div class="table-responsive">
    <table class="table" id="compras-table">
        <thead>
            <tr>
                <th>Idcomprobante</th>
        <th>Numero</th>
        <th>Idproveedor</th>
        <th>Sub Tot</th>
        <th>Igv Tot</th>
        <th>Tot Tot</th>
        <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->idcomprobante }}</td>
            <td>{{ $compra->numero }}</td>
            <td>{{ $compra->idproveedor }}</td>
            <td>{{ $compra->sub_tot }}</td>
            <td>{{ $compra->igv_tot }}</td>
            <td>{{ $compra->tot_tot }}</td>
            <td>{{ $compra->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['compras.destroy', $compra->idcompra], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compras.show', [$compra->idcompra]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('compras.edit', [$compra->idcompra]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
