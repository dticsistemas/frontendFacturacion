<?php 
include_once("_header.php");
?>

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




    	?>



    </div>
    <div class="content">
    	<div class="row">
    	    <div class="col-sm-3"></div>
    	   
    	    <div class="col-sm-6">
    	    	<div><b><h4>CONFIGURACIÓN FACTURA (ACTUAL)</h4></b></div>
    	    	<div>
    	    		<b>ID: </b><?=$configuracion->id?><br>
    	    		<b>NIT:</b><?=$configuracion->nitProveedor?><br>
    	    		<b>RS: </b><?=$configuracion->razonSocialProveedor?><br>
    	    	</div>
    	    	<div>
    	    	<h4>CREAR CONFIGURACION FACTURACION</h4>
    	    	<form class="form form-control"
    	    	action="procesarconfiguracionfactura.php" method="post">
    	    		
<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nit Proveedor</label>
					  <input type="text" name="nitProveedor" class="form-control" id="exampleFormControlInput1" placeholder="......" value="">
					</div>
    	    		<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Razon Social Proveedor</label>
					  <input type="text" name="razonSocialProveedor" class="form-control" id="exampleFormControlInput1" placeholder="....." value="">
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nro. Autorizacion</label>
					  <input type="text" name="nroAutorizacion" class="form-control" id="exampleFormControlInput1" placeholder="....." value="">
					</div>
					<p id="demo"></p>
					<input type="submit" value=" CREAR CONFIGURACION FACTURA ">
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
<?php 
include_once("_footer.php");
?>