<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cantidad</th>
        <th>Precio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->marca }}</td>
            <td>{{ $producto->modelo }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->precio }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $producto->idproducto], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->idproducto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productos.edit', [$producto->idproducto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
