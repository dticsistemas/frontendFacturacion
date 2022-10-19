<?php 




echo '<p> DATOS DETALLE CONFIGURACION FACTURA </p>';

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


?>