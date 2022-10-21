<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AEROLINEA MICROSERVICIO CONTROL FACTURA</title>
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


$id_reserva=$_GET['reserva'];
//var_dump($id_reserva);
// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/reserva/'.$id_reserva,
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$reserva = json_decode($result);
//var_dump($reserva);
curl_close($ch);

$id_cliente = $reserva->clienteId;
$id_vuelo = $reserva->vueloId;
// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/cliente/'.$id_cliente,
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$pasajero = json_decode($result);
//var_dump($pasajero);

curl_close($ch);


// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/vuelo/'.$id_vuelo,
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$vuelo = json_decode($result);

//var_dump($vuelo);

curl_close($ch);



    	?>



    </div>
    <div class="content">
    	<div class="row">
    	    <div class="col-sm-3"></div>
    	   
    	    <div class="col-sm-6">
    	    	<div><b><h4>CONFIGURACIÓN FACTURA</h4></b></div>
    	    	<div>
    	    		<b>ID: </b><?=$configuracion->id?><br>
    	    		<b>NIT:</b><?=$configuracion->nitProveedor?><br>
    	    		<b>RS: </b><?=$configuracion->razonSocialProveedor?><br>
    	    	</div>
    	    	<div>
    	    	<h4>FACTURACION</h4>
    	    	<form class="form form-control"
    	    	action="resultado.php" method="post">
    	    		<input type="hidden" id="monto" name="monto" value="<?=$reserva->monto?>">
    	    		<input type="hidden" name="importe" value="0">
    	    		<input type="hidden" name="lugar" value="SCZ">

<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nit/Ci/Passport</label>
					  <input type="text" name="nitBeneficiario" class="form-control" id="exampleFormControlInput1" placeholder="......" value="<?=$pasajero->passport?>">
					</div>
    	    		<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Razon Social</label>
					  <input type="text" name="razonSocialBeneficiario" class="form-control" id="exampleFormControlInput1" placeholder="....." value="<?=$pasajero->nombreCompleto?>">
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Passport/Nit/Ci</label>
					  <select class="form-select" name="tipoNit" aria-label="Default select example">
						  <option value="passport" selected>Passport</option>
						  <option value="nit">Nit</option>
						  <option value="ci">Ci</option>
						</select>
					</div>
					
					<input type="hidden" id="reservaId" name="reservaId" value="<?=$reserva->id?>">
					<input type="hidden" id="clienteId" name="clienteId" value="<?=$reserva->clienteId?>">
					<input type="hidden" id="vueloId" name="vueloId" value="<?=$reserva->vueloId?>">
					<input type="hidden" name="configuracionFacturaId" value="<?=$configuracion->id?>">
					<p id="demo"></p>
					<input type="submit" value=" CREAR FACTURA ">
    	    	</form>
    	    	</div>
    	    </div>
    	    <div class="col-sm-3">
    	    	 
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
</script>
</html>