<div class="table-responsive">
    <table class="table" id="ventadetalles-table">
        <thead>
            <tr>
                <th>Idventa</th>
        <th>Idproducto</th>
        <th>Cantidad</th>
        <th>Prec Unit</th>
        <th>Tot Tot</th>
        <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventadetalles as $ventadetalle)
            <tr>
                <td>{{ $ventadetalle->idventa }}</td>
            <td>{{ $ventadetalle->idproducto }}</td>
            <td>{{ $ventadetalle->cantidad }}</td>
            <td>{{ $ventadetalle->prec_unit }}</td>
            <td>{{ $ventadetalle->tot_tot }}</td>
            <td>{{ $ventadetalle->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['ventadetalles.destroy', $ventadetalle->idventadeta], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventadetalles.show', [$ventadetalle->idventadeta]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ventadetalles.edit', [$ventadetalle->idventadeta]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
