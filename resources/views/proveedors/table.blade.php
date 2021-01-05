<div class="table-responsive">
    <table class="table" id="proveedors-table">
        <thead>
            <tr>
                <th>Razon Social</th>
        <th>Idtipodoc</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->razon_social }}</td>
            <td>{{ $proveedor->idtipodocs->descrip_doc }}</td>
            <td>{{ $proveedor->documento }}</td>
            <td>{{ $proveedor->correo }}</td>
            <td>{{ $proveedor->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['proveedors.destroy', $proveedor->idproveedor], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedors.show', [$proveedor->idproveedor]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('proveedors.edit', [$proveedor->idproveedor]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
