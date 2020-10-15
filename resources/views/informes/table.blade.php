<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>Casos Total</th>
        <th>Activo</th>
        <th>Recuperado Por Dia</th>
        <th>Fallecido</th>
        <th>Casos Por Barrio</th>
        <th>Edad Promedio</th>
        <th>Genero mas afectado</th>
        <th>Lugar Mas Afectado</th>
        <th>Fecha Actualizacion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($informes as $informe)
            <tr>
                <td>{{ $informe->casos_total }}</td>
            <td>{{ $informe->activo }}</td>
            <td>{{ $informe->recuperado_por_dia }}</td>
            <td>{{ $informe->fallecido }}</td>
            <td>{{ $informe->casos_por_barrio }}</td>
            <td>{{ $informe->edad_promedio }}</td>
            <td>{{ $informe->genero }}</td>
            <td>{{ $informe->lugar_mas_afectado }}</td>
            <td>{{ $informe->fecha_actualizacion }}</td>
                <td>
                    {!! Form::open(['route' => ['informes.destroy', $informe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('informes.show', [$informe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('informes.edit', [$informe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro que desea eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
