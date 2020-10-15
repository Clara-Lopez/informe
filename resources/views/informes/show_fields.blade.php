<!-- Casos Total Field -->
<div class="form-group">
    {!! Form::label('casos_total', 'Casos Total:') !!}
    <p>{{ $informe->casos_total }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', 'Activo:') !!}
    <p>{{ $informe->activo }}</p>
</div>

<!-- Recuperado Por Dia Field -->
<div class="form-group">
    {!! Form::label('recuperado_por_dia', 'Recuperado Por Dia:') !!}
    <p>{{ $informe->recuperado_por_dia }}</p>
</div>

<!-- Fallecido Field -->
<div class="form-group">
    {!! Form::label('fallecido', 'Fallecido:') !!}
    <p>{{ $informe->fallecido }}</p>
</div>

<!-- Casos Por Barrio Field -->
<div class="form-group">
    {!! Form::label('casos_por_barrio', 'Casos Por Barrio:') !!}
    <p>{{ $informe->casos_por_barrio }}</p>
</div>

<!-- Edad Promedio Field -->
<div class="form-group">
    {!! Form::label('edad_promedio', 'Edad Promedio:') !!}
    <p>{{ $informe->edad_promedio }}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero mas afectado:') !!}
    <p>{{ $informe->genero }}</p>
</div>

<!-- Lugar Mas Afectado Field -->
<div class="form-group">
    {!! Form::label('lugar_mas_afectado', 'Lugar Mas Afectado:') !!}
    <p>{{ $informe->lugar_mas_afectado }}</p>
</div>

<!-- Fecha Actualizacion Field -->
<div class="form-group">
    {!! Form::label('fecha_actualizacion', 'Fecha Actualizacion:') !!}
    <p>{{ $informe->fecha_actualizacion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $informe->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $informe->updated_at }}</p>
</div>

