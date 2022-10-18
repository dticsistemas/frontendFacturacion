  <?php 

// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/configuracion',
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$configuracion = json_decode($result);
curl_close($ch);


// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/pasajeros',
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$pasajeros = json_decode($result);
curl_close($ch);


// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/vuelos',
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$vuelos = json_decode($result);
curl_close($ch);



// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/reservas',
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$reservas = json_decode($result);
curl_close($ch);
      ?>



<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>AirlineFrontend</title>
  <!-- base href="http://localhost:4200/" -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="http://localhost:4200/favicon.ico">
  <link rel="stylesheet" href="AirlineFrontend_archivos/styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJhcHAuY29tcG9uZW50LnNjc3MifQ== */</style><style>[_nghost-crr-c19] {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 14px;
    color: #333;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  h1[_ngcontent-crr-c19], h2[_ngcontent-crr-c19], h3[_ngcontent-crr-c19], h4[_ngcontent-crr-c19], h5[_ngcontent-crr-c19], h6[_ngcontent-crr-c19] {
    margin: 8px 0;
  }

  p[_ngcontent-crr-c19] {
    margin: 0;
  }

  .spacer[_ngcontent-crr-c19] {
    flex: 1;
  }

  .toolbar[_ngcontent-crr-c19] {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 60px;
    display: flex;
    align-items: center;
    background-color: #1976d2;
    color: white;
    font-weight: 600;
  }

  .toolbar[_ngcontent-crr-c19]   img[_ngcontent-crr-c19] {
    margin: 0 16px;
  }

  .toolbar[_ngcontent-crr-c19]   #twitter-logo[_ngcontent-crr-c19] {
    height: 40px;
    margin: 0 8px;
  }

  .toolbar[_ngcontent-crr-c19]   #youtube-logo[_ngcontent-crr-c19] {
    height: 40px;
    margin: 0 16px;
  }

  .toolbar[_ngcontent-crr-c19]   #twitter-logo[_ngcontent-crr-c19]:hover, .toolbar[_ngcontent-crr-c19]   #youtube-logo[_ngcontent-crr-c19]:hover {
    opacity: 0.8;
  }</style><style>
/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJmbGlnaHRzLXBhZ2UuY29tcG9uZW50LnNjc3MifQ== */</style></head>
<body>
  <app-root _nghost-crr-c19="" ng-version="14.2.5"><div _ngcontent-crr-c19="" role="banner" class="toolbar"><img _ngcontent-crr-c19="" alt="Angular Logo" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTAgMjUwIj4KICAgIDxwYXRoIGZpbGw9IiNERDAwMzEiIGQ9Ik0xMjUgMzBMMzEuOSA2My4ybDE0LjIgMTIzLjFMMTI1IDIzMGw3OC45LTQzLjcgMTQuMi0xMjMuMXoiIC8+CiAgICA8cGF0aCBmaWxsPSIjQzMwMDJGIiBkPSJNMTI1IDMwdjIyLjItLjFWMjMwbDc4LjktNDMuNyAxNC4yLTEyMy4xTDEyNSAzMHoiIC8+CiAgICA8cGF0aCAgZmlsbD0iI0ZGRkZGRiIgZD0iTTEyNSA1Mi4xTDY2LjggMTgyLjZoMjEuN2wxMS43LTI5LjJoNDkuNGwxMS43IDI5LjJIMTgzTDEyNSA1Mi4xem0xNyA4My4zaC0zNGwxNy00MC45IDE3IDQwLjl6IiAvPgogIDwvc3ZnPg==" width="40"><span _ngcontent-crr-c19="">Nombre de nuestra aerolinea</span><div _ngcontent-crr-c19="" class="spacer"></div><a _ngcontent-crr-c19="" aria-label="Angular on twitter" target="_blank" rel="noopener" href="https://twitter.com/angular" title="Twitter"><svg _ngcontent-crr-c19="" id="twitter-logo" height="24" data-name="Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><rect _ngcontent-crr-c19="" width="400" height="400" fill="none"></rect><path _ngcontent-crr-c19="" d="M153.62,301.59c94.34,0,145.94-78.16,145.94-145.94,0-2.22,0-4.43-.15-6.63A104.36,104.36,0,0,0,325,122.47a102.38,102.38,0,0,1-29.46,8.07,51.47,51.47,0,0,0,22.55-28.37,102.79,102.79,0,0,1-32.57,12.45,51.34,51.34,0,0,0-87.41,46.78A145.62,145.62,0,0,1,92.4,107.81a51.33,51.33,0,0,0,15.88,68.47A50.91,50.91,0,0,1,85,169.86c0,.21,0,.43,0,.65a51.31,51.31,0,0,0,41.15,50.28,51.21,51.21,0,0,1-23.16.88,51.35,51.35,0,0,0,47.92,35.62,102.92,102.92,0,0,1-63.7,22A104.41,104.41,0,0,1,75,278.55a145.21,145.21,0,0,0,78.62,23" fill="#fff"></path></svg></a><a _ngcontent-crr-c19="" aria-label="Angular on YouTube" target="_blank" rel="noopener" href="https://youtube.com/angular" title="YouTube"><svg _ngcontent-crr-c19="" id="youtube-logo" height="24" width="24" data-name="Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff"><path _ngcontent-crr-c19="" d="M0 0h24v24H0V0z" fill="none"></path><path _ngcontent-crr-c19="" d="M21.58 7.19c-.23-.86-.91-1.54-1.77-1.77C18.25 5 12 5 12 5s-6.25 0-7.81.42c-.86.23-1.54.91-1.77 1.77C2 8.75 2 12 2 12s0 3.25.42 4.81c.23.86.91 1.54 1.77 1.77C5.75 19 12 19 12 19s6.25 0 7.81-.42c.86-.23 1.54-.91 1.77-1.77C22 15.25 22 12 22 12s0-3.25-.42-4.81zM10 15V9l5.2 3-5.2 3z"></path></svg></a></div><main _ngcontent-crr-c19="" class="container" style="margin-top: 70px;"><router-outlet _ngcontent-crr-c19=""></router-outlet><app-flights-page _nghost-crr-c17="">
    <div class="row">
      <div class="col-sm-5">
        <h4 _ngcontent-crr-c17="">FACTURAR RESERVAS PAGADAS</h4>        
      </div>
      <div class="col-sm-5">
            <div><b><h4>CONFIGURACIÓN FACTURA</h4></b></div>
            <div>
              <b>ID: </b><?=$configuracion->id?><br>
              <b>NIT:</b><?=$configuracion->nitProveedor?><br>
              <b>RS: </b><?=$configuracion->razonSocialProveedor?><br>
            </div>
       </div>
       <div class="col-sm-2">
            <div> <a href="crearconfiguracion.php"> CONFIGURACION</a> </div>
            <div> <a href="searchfactura.php"> BUSCAR FACTURA</a> </div>
       </div>
    </div>      
    <hr _ngcontent-crr-c17="">
  </app-flights-page><!--container-->
  </main>
  </app-root>


  <body>

<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
    <table id="example" class="display" style="width:100%">
        <thead>
           <tr>
                <th>ID Booking</th>
                <th>ID Flight</th>
                <th>ID Passanger</th>
                <th>Detalle</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

          <?php
  foreach ($reservas as $booking) {
  //var_dump($booking);
    echo "<tr>";
    echo "<td>".$booking->id."</td>";
    echo "<td>".$booking->vueloId."</td>";
    echo "<td>".$booking->clienteId."</td>";
    echo "<td>".$booking->reservationNumber."</td>";
    echo "<td> <a href='facturacionreserva.php?reserva=".$booking->id."'> CREAR FACTURA</a></td>";
    echo "</tr>";
  }
?>
            
            
            
        </tbody>
       
    </table>

  </div>
  <div class="col-sm-1"></div>
</div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <div class="content">
    	
    
    </div>
    <p><p><hr>
    <div class="content">
    	<div class="row">
    	       	    
    	    <div class="col-sm-4">
    	    	<ul>
    	    		<li>Passangers</li>
    	    		<div>
    	    			<?php
    	    				foreach ($pasajeros as $passanger) {
    	    					echo "<div class='row'> ";
    	    					echo "<div class='col-sm-6'>".$passanger->id."</div> <div class='col-sm-6'>".$passanger->nombreCompleto."</div>";
    	    					echo "</div>";
    	    				}
    	    			?>
    	    		
    	    	</div>
          </ul>  
          </div>
          <div class="col-sm-4">  
          <ul>  
    	    		<li>FlyAirCraft</li>
    	    		<div>
    	    			<?php
    	    				foreach ($vuelos as $flight) {
    	    					//var_dump($flight);
    	    					echo "<div class='row'> ";
    	    					echo "<div class='col-sm-6'>".$flight->id."</div> <div class='col-sm-6'> ".$flight->source_airport_code." - ".$flight->destiny_airport_code."</div>";
    	    					echo "</div>";
    	    				}
    	    			?>
    	    		</div>
          </ul>  
          </div>  
          <div class="col-sm-4">  
            <ul>    
    	    		<li>Booking</li>
    	    		<div>
    	    			<?php
    	    				foreach ($reservas as $booking) {
    	    					//var_dump($booking);
    	    					echo "<div class='row'>";
    	    					echo "<div class='col-sm-6'>".$booking->id."</div> <div class='col-sm-6'>[".$booking->reservationNumber."] Monto: ".$booking->monto."</div>";
    	    					echo "</div>";
    	    				}
    	    			?>
    	    		</div>
    	    	</ul> 
    	    </div>


    	</div>
    </div>
  </body>
<script type="text/javascript">
	

</script>

<script>
$(document).ready(function(){   
	/*$.ajax({
	    type: "GET",
	    //dataType: "json",
	    url: "http://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/configuracion",
	    crossDomain: true,
	    //dataType: 'jsonp',

	})
	 .done(function( data, textStatus, jqXHR ) {
	 	console.log(data);
	     if ( console && console.log ) {
	         console.log( "La solicitud se ha completado correctamente." );
	     }
	 })
	 .fail(function( jqXHR, textStatus, errorThrown ) {
	     if ( console && console.log ) {
	         console.log( "La solicitud a fallado: " +  textStatus);
	     }
	});*/

	$.ajax({
    url: "https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/configuracion",
    type: 'GET',
    crossDomain: true,
    dataType: 'jsonp',
    success: function(data) {
    	console.log(data);
    	//alert("Success");
    },
    error: function() { //alert('Failed!'); }
}).done(function( data, textStatus, jqXHR ) {
	 	console.log(data);
	 });


 });
 function facturar(/*idReserva,idVuelo,idCliente*/){
 	 document.getElementById("demo").innerHTML = "Hello World";
 	//alert(idReserva+"_vuelo_"+idVuelo+"_cliente_"+idCliente);
 }
</script>



<script>

function myFunction(idReserva,idVuelo,idCliente,monto) {
  document.getElementById("demo").innerHTML = "MontoTotal:"+monto+
  " <br> ReservaID:{"+idReserva+"}<br>"+
  "VueloID:{"+idVuelo+"}<br>ClienteID:{"+idCliente+"}";
  document.getElementById("monto").value=monto;
  document.getElementById("reservaId").value=idReserva;
  document.getElementById("clienteId").value=idCliente;
  document.getElementById("vueloId").value=idVuelo;
}

$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</html>