<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
        <!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<br></br>
<br>
@include('layouts.menup')
@yield('content')
<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"> <center><i class="fa fa-chart-pie"></i> Historial de graficos </center></h2>
    <p class="lead"><center>Aqui se observan los datos mas recientes en formato grafico.</center></p>
  </div>
</div>
</div>

<div class="container">

 
   <!-- Card content -->
   <div class="card-body">
    <div class="card">
    <!-- Title -->
         
          <div id="container"></div>
            
                <script type="text/javascript">
                        // Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Generos mas afectados'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'FEMENINO',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'MASCULINO',
            y: 11.84
        }, {
            name: 'AMBOS',
            y: 10.85
        }, {
            name: 'OTRO',
            y: 4.67
        
        }]
    }]
});         
      </script>
    </div>
    </div>
</div>

      
    <!-- Title -->
         <div class="container">
            <div class="card-body">
            <div class="card">
          <div id="containers">
 </div>
          </div>
          </div>
          <script type="text/javascript">
          	Highcharts.chart('containers', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Casos mensuales por distrito'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Encarnacion',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'Capitan Miranda',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'Coronel Bogado',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Cambyreta',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});

          </script></div>
          </div>
          
    <!-- Title -->
         <div class="container">
            <div class="card-body">
            <div class="card">
          <div id="containerss">

        </div>
          </div>
          </div>
            <script type="text/javascript">
                var chart = Highcharts.chart('containerss', {

    title: {
        text: 'Estado de casos mensual'
    },

    subtitle: {
        text: 'Detalles'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        showInLegend: false
    }]

});


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});
            </script>
            <div class="table-responsive">
    <table class="table" id="tablas-table">
        <thead>
            <tr>
                <th>Femenino</th>
                <th>Masculino</th>
                <th>Ambos</th>
                <th>Otro</th>
                <br>
                <th>Encarnacion</th>
                <th>Cambyreta</th>
                <th>Coronel Bogado</th>
                <th>Capitan Mirando</th>
                <th>Positivo</th>
                <th>Negativo</th>
                <th>Recuperado</th>
                <th>Fallecido</th>
                <th>Inconcluso</th>
            </tr>
        </thead>
        <tbody>
        @foreach($table as $tabla)
            <tr>
                <td>{{ $tabla->femenino }}</td>
                <td>{{ $tabla->masculino }}</td>
                <td>{{ $tabla->ambos }}</td>
                <td>{{ $tabla->otro }}</td><br>
                <td>{{ $tabla->encarnacion }}</td>
                <td>{{ $tabla->cambyreta }}</td>
                <td>{{ $tabla->coronel_bogado }}</td>
                <td>{{ $tabla->capitan_mirando }}</td>
                <td>{{ $tabla->positivo }}</td>
                <td>{{ $tabla->negativo }}</td>
                <td>{{ $tabla->recuperado }}</td>
                <td>{{ $tabla->fallecido }}</td>
                <td>{{ $tabla->inconcluso }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
              
          </div>
      </br>



@include('layouts.footerp')
@yield('content')    