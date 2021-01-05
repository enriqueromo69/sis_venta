<div class="table-responsive">
    <table class="table" id="tipoClies-table">
        <thead>
            <tr>
                <th>Descrip Doc</th>
        <th>Caracteres</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoClies as $tipoClie)
            <tr>
                <td>{{ $tipoClie->descrip_doc }}</td>
            <td>{{ $tipoClie->caracteres }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoClies.destroy', $tipoClie->idtipodoc], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoClies.show', [$tipoClie->idtipodoc]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tipoClies.edit', [$tipoClie->idtipodoc]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
