<?php 


$id_factura=$_GET['factura'];

var_dump($id_factura);

echo '<p> DATOS DETALLE FACTURA </p>';
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
var_dump($factura);

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

echo '<p> CONFIGURACION FACTURA </p>';
var_dump($configuracion);
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
echo '<p> RESERVA </p>';
var_dump($reserva);
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
echo '<p> PASAJERO </p>';
var_dump($pasajero);

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
echo '<p> VUELO </p>';
var_dump($vuelo);

curl_close($ch);



?>