<!-- Casos Total Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $usuario->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    <p>{{ $usuario->ciudad }}</p>
</div>

<!-- Recuperado Por Dia Field -->
<div class="form-group">
    {!! Form::email('email', 'Email:') !!}
    <p>{{ $usuario->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $usuario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $usuario->updated_at }}</p>
</div>

