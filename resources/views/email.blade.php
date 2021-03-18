<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo caso de dengue en Itapúa.</p>

      <div class="box-body">
                    @include('informes.table')
            </div>

            <div class="box-body">
                    @include('graficos.blade.php')
            </div>

            <div class="box-body">
                    @include('mapas.blade.php')
            </div>
            
            <a href="https://www.google.com/maps/dir/{{ $distressCall->lat }},{{ $distressCall->lng }}">
                Ver en Google Maps
            </a>
        </li>
    </ul>
</body>
</html>