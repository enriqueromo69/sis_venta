<div class="table-responsive">
    <table class="table" id="comprobantes-table">
        <thead>
            <tr>
                <th>Descrip Cmp</th>
        <th>Incial</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comprobantes as $comprobante)
            <tr>
                <td>{{ $comprobante->descrip_cmp }}</td>
            <td>{{ $comprobante->incial }}</td>
                <td>
                    {!! Form::open(['route' => ['comprobantes.destroy', $comprobante->idcomprobante], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comprobantes.show', [$comprobante->idcomprobante]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('comprobantes.edit', [$comprobante->idcomprobante]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
