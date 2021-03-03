<li class="{{ Request::is('informes*') ? 'active' : '' }}">
    <a href="{{ route('informes.index') }}"><i class="fa fa-edit"></i><span>Informes en PDF</span></a>
</li>
<li class="{{ Request::is('informes*') ? 'active' : '' }}">
    <a href=""><i class="fa fa-folder"></i>	<span>Informes en Gráfico</span></a>
</li>
<li class="{{ Request::is('informes*') ? 'active' : '' }}">
    <a href=""><i class="fa fa-map"></i><span>Informes en mapas</span></a>
</li>
<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{{action('UsuarioController@index')}}"><i class="fa fa-user"></i><span>Usuarios</span></a>
</li>
