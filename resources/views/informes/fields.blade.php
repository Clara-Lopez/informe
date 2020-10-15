<!-- Casos Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('casos_total', 'Casos Total:') !!}
    {!! Form::text('casos_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    {!! Form::text('activo', null, ['class' => 'form-control']) !!}
</div>

<!-- Recuperado Por Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recuperado_por_dia', 'Recuperado Por Dia:') !!}
    {!! Form::text('recuperado_por_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Fallecido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fallecido', 'Fallecido:') !!}
    {!! Form::text('fallecido', null, ['class' => 'form-control']) !!}
</div>

<!-- Casos Por Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('casos_por_barrio', 'Casos Por Barrio:') !!}
    {!! Form::text('casos_por_barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Promedio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad_promedio', 'Edad Promedio:') !!}
    {!! Form::number('edad_promedio', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero mas afectado:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>

<!-- Lugar Mas Afectado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_mas_afectado', 'Lugar Mas Afectado:') !!}
    {!! Form::text('lugar_mas_afectado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Actualizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_actualizacion', 'Fecha Actualizacion:') !!}
    {!! Form::date('fecha_actualizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('informes.index') }}" class="btn btn-default">Cancelar</a>
</div>
