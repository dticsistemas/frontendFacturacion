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


//echo '<p> CONFIGURACION FACTURA </p>';
//var_dump($configuracion);
curl_close($ch);
?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <p> <h3>NUEVA CONFIGURACION FACTURA </h3></p>
        <b>UID: </b>  <?=$configuracion->id?><br>
        <b>Nit Proveedor: </b>  <?=$configuracion->nitProveedor?><br>
        <b>Razon Social Proveedor: </b>  <?=$configuracion->razonSocialProveedor?><br>
        <b>Nro. Autorizacion: </b>  <?=$configuracion->nroAutorizavion?><br>
        <b>estado: </b>  <?=$configuracion->estado?><br>
    </div>
    <div class="col-sm-2"></div>
</div>
<div class="row text-center">
    <a href="http://<?= $_SERVER['SERVER_NAME'];?>"> VOLVER A INICIO</a>
</div>
<?php
include_once("footer.php");
?>