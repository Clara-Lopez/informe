<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
@extends('layouts.app')
@section('content')

<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"> <center><i class="fa fa-map-marker-alt"></i> Informe por mapas </center></h2>
    <p class="lead"><center>Informe en formato mapas.</center></p>
  </div>
</div>
</div>
<div class="container">
   <style type="text/css">
             #mapid { height: 550px; }
        </style>
         
           <div class="col-sm-12 col-sm-2">     
            <div class="card">
             <div class="card-body">
        </div>
          </div>
        </div>
        </a>
      </h4>
    </div>
  
        <div class="card">
        <!-- Card content -->
        <div class="card-body">
          <center> <div id="mapid"></div></center>
             
              </div>
        </div>
        </div>
      
</div>      
      <script type="text/javascript">
            var map = L.map('mapid').setView([-27.33056,  -55.86667], 12);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
           
          L.marker([-27.337004949626625, -55.8664512669202]).addTo(map)
              .bindPopup('Encarnacion 10')
           
            
          L.marker([-27.319619683648703, -55.88392256875523]).addTo(map)
              .bindPopup('Mboi ka e 20')
              
           
          L.marker([-27.384266881102295, -55.823650377569734]).addTo(map)
              .bindPopup('San Isidro 9')
              
          
          L.marker([-27.37017510957327, -55.844497689977295]).addTo(map)
              .bindPopup('Sagrada Familia 9')
              
          
          L.marker([-27.352422344233265, -55.8535003673751]).addTo(map)
              .bindPopup('Ciudad Nueva 8')
              
         
          L.marker([-27.30929907159278, -55.84188461070881]).addTo(map)
              .bindPopup('Chaipe 0')
                
          
          L.marker([-27.359401831819117, -55.76108931913041]).addTo(map)
              .bindPopup('Cambyreta 12')
                
             
          L.marker([-27.286366591508596, -55.8185577322729]).addTo(map)
              .bindPopup('Santa Maria 4')
              
          
          L.marker([-27.272838774583402, -55.928955076960854]).addTo(map)
              .bindPopup('Ita Paso 6')
              
            
          L.marker([-27.35787721652415, -55.853843690129004]).addTo(map)
              .bindPopup('Buena Vista 7')
              
            
           L.marker([-27.367464949196265, -55.83219529828057]).addTo(map)
              .bindPopup('Fatima 5')
             
          </script>

     </div>
  </div>
 
</div>
</a>
</h4>
</div>
</div>

@endsection