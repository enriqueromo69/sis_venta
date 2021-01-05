<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('tipoClies*') ? 'active' : '' }}">
    <a href="{{ route('tipoClies.index') }}"><i class="fa fa-edit"></i><span>Tipo Clies</span></a>
</li>

<li class="{{ Request::is('celulars*') ? 'active' : '' }}">
    <a href="{{ route('celulars.index') }}"><i class="fa fa-edit"></i><span>Celulars</span></a>
</li>

<li class="{{ Request::is('proveedors*') ? 'active' : '' }}">
    <a href="{{ route('proveedors.index') }}"><i class="fa fa-edit"></i><span>Proveedors</span></a>
</li>

<li class="{{ Request::is('comprobantes*') ? 'active' : '' }}">
    <a href="{{ route('comprobantes.index') }}"><i class="fa fa-edit"></i><span>Comprobantes</span></a>
</li>

<li class="{{ Request::is('compras*') ? 'active' : '' }}">
    <a href="{{ route('compras.index') }}"><i class="fa fa-edit"></i><span>Compras</span></a>
</li>

<li class="{{ Request::is('compradetalles*') ? 'active' : '' }}">
    <a href="{{ route('compradetalles.index') }}"><i class="fa fa-edit"></i><span>Compradetalles</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>

<li class="{{ Request::is('ventadetalles*') ? 'active' : '' }}">
    <a href="{{ route('ventadetalles.index') }}"><i class="fa fa-edit"></i><span>Ventadetalles</span></a>
</li>

