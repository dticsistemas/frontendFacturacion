<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AEROLICA MICROSERVICIO CONTROL FACTURA</title>
     <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  </head>
  <body>
    <h3>MICROSERVICIO FACTURA</h3><p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <div class="content">
    	
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


    	?>
    </div>
    <div class="content">
    	<div class="row">
    	    <div class="col-sm-1"></div>
    	    <div class="col-sm-3">
    	    	<div>Listado de Reservas</div>
    	    	
    	    </div>
    	    <div class="col-sm-4">
    	    	<div><b><h4>CONFIGURACION FACTURA</h4></b></div>
    	    	<div>
    	    		<b>ID:</b><?=$configuracion->id?><br>
    	    		<b>NIT:</b><?=$configuracion->nitProveedor?><br>
    	    		<b>RS:</b><?=$configuracion->razonSocialProveedor?><br>
    	    	</div>
    	    	<div>
    	    	<h4>FACTURACION</h4>
    	    	<form class="form form-control" action="" method="post">
    	    		<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Razon Social</label>
					  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=".....">
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
					  <select class="form-select" aria-label="Default select example">
						  <option value="1">Passport</option>
						  <option value="2">Nit</option>
						  <option value="3">Ci</option>
						</select>
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nit/Ci/Passport</label>
					  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="......">
					</div>
    	    	</form>
    	    	</div>
    	    </div>
    	    <div class="col-sm-4">
    	    	Reportes
    	    	<ul>
    	    		<li>Passangers</li>
    	    		<div>
    	    			<?php
    	    				foreach ($pasajeros as $passanger) {
    	    					echo $passanger->nombreCompleto."<br>";
    	    				}
    	    			?>
    	    		
    	    	</div>
    	    		<li>FlyAirCraft</li>
    	    		<div>
    	    			<?php
    	    				foreach ($vuelos as $flight) {
    	    					//var_dump($flight);
    	    					echo $flight->source_airport_code.
    	    					" - ".$flight->destiny_airport_code."<br>";
    	    				}
    	    			?>
    	    		</div>
    	    		<li>Booking</li>
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
</script>

</html>
