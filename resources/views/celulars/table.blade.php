<div class="table-responsive">
    <table class="table" id="celulars-table">
        <thead>
            <tr>
                <th>Idcliente</th>
        <th>Celular</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($celulars as $celular)
            <tr>
                <td>{{ $celular->idcliente }}</td>
            <td>{{ $celular->celular }}</td>
                <td>
                    {!! Form::open(['route' => ['celulars.destroy', $celular->idcelular], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('celulars.show', [$celular->idcelular]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('celulars.edit', [$celular->idcelular]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
