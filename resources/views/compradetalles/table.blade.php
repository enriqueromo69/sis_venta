<div class="table-responsive">
    <table class="table" id="compradetalles-table">
        <thead>
            <tr>
                <th>Idcompra</th>
        <th>Idproducto</th>
        <th>Idproveedor</th>
        <th>Cantidad</th>
        <th>Prec Unit</th>
        <th>Tot Tot</th>
        <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compradetalles as $compradetalle)
            <tr>
                <td>{{ $compradetalle->idcompra }}</td>
            <td>{{ $compradetalle->idproducto }}</td>
            <td>{{ $compradetalle->idproveedor }}</td>
            <td>{{ $compradetalle->cantidad }}</td>
            <td>{{ $compradetalle->prec_unit }}</td>
            <td>{{ $compradetalle->tot_tot }}</td>
            <td>{{ $compradetalle->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['compradetalles.destroy', $compradetalle->idcompradeta], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compradetalles.show', [$compradetalle->idcompradeta]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('compradetalles.edit', [$compradetalle->idcompradeta]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
