<?php 
include_once("_header.php");

$id_factura=$_GET['factura'];

var_dump($id_factura);

// init curl object        
$ch = curl_init();
// define options
$optArray = array(
    CURLOPT_URL => 'https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/'.$id_factura,
    CURLOPT_RETURNTRANSFER => true
);
// apply those options
curl_setopt_array($ch, $optArray);
// execute request and get response
$result = curl_exec($ch);
$factura = json_decode($result);
//var_dump($factura);

$id_reserva=$factura->reservaId;
curl_close($ch);


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

//var_dump($configuracion);
curl_close($ch);


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


include_once("footer.php");
?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
<?php
echo "Razon Social Proveedor: ".$configuracion->razonSocialProveedor."<br>";
echo "Emitido: "."<br>";
echo "NIT Proveedor: ".$configuracion->nitProveedor."<br>";
echo "N° Autorizacion: ".$configuracion->nroAutorizacion."<br>";

echo "ID FACTURA: ".$factura->id."<br>";
echo "Nro.Factura: ",$factura->nroFactura."<br>";
echo "Emitido: ".$fecha->fecha."<br>";
echo "Razon Social: ".$factura->razonSocialBeneficiario."<br>";
echo $factura->tipoNit." : ".$factura->nitBeneficiario."<br>";
echo "Fecha Reserva: ".$reserva->fecha."<br>";
echo "Nro.Reserva: ".$reserva->reservationStatus."<br>";
echo "Estado: FACTURADO"."<br>";
echo "Monto: ".$reserva->monto."<br>";
echo "tipoReserva: R"."<br>";
echo "Origen: ".$vuelo->source_airport_code."<br>";
echo "Destino: ".$vuelo->destiny_airport_code."<br>";
echo "Programa de Vuelo: ".$vuelo->flight_program_id."<br>";
echo "Informacion: "."<br>";

?>
    </div>
    <div class="col-sm-2"></div>
</div>    