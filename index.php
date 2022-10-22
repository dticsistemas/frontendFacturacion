 <?php 
 include_once("_header.php");

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
            <div> <a href="createconfiguracion"> CONFIGURACION</a> </div>
            <div> <a href="searchfactura.php"> BUSCAR FACTURA</a> </div>
       </div>
    </div>      
    <hr _ngcontent-crr-c17="">
  </app-flights-page><!--container-->
  </main>
  </app-root>
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
                <th>Estado</th>
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
    echo "<td>".$booking->reservationStatus."</td>";
    //echo "<td> <a class='btn btn-primary' href='createfactura/reserva=".$booking->id."'> CREAR </a></td>";

    echo '<td><form action="createfactura" method="post"><button type="submit" class="btn btn-primary" > CREAR </button>';
    echo '<input type="hidden" name="reserva" value="'.$booking->id.'"></input></form></td>';
    echo "</tr>";
  }
?>
</form>                                    
        </tbody>
       
    </table>

    <p> </p>
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
          <div class="col-sm-1">    
          </div>
    	    <div class="col-sm-5">

          <div class="row">
      <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">PASSANGERS</h6>
    <?php
    	    				foreach ($pasajeros as $passanger) {
                  ?>
 <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark"><?=$passanger->id?></strong>
          <!--<a href="#">Follow</a>-->
        </div>
        <span class="d-block">@<?=$passanger->name." ".$passanger->lastName?></span>
      </div>
    </div>

<?php
    	    				}
    	    			?>
    
    
  </div>
      </div>

  
          </div>
          <div class="col-sm-5">

          <div class="row">
      <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">VUELOS</h6>
    <?php
    	    				foreach ($vuelos as $flight) {
                  ?>
 <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark"><?=$flight->id?></strong>
          <!--<a href="#">Follow</a>-->
        </div>
        <span class="d-block">@<?=$flight->source_airport_code." - ".$flight->destiny_airport_code?></span>
      </div>
    </div>

<?php
    	    				}
    	    			?>
    
    
  </div>
      </div>

  
          </div>
          
          <div class="col-sm-1"></div>


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
<?php 
include_once("_footer.php");
?>