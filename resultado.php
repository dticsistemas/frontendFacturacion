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
    <div class="row">
<div class="col-sm-3"> </div>
<div class="col-sm-6">
<?php

foreach($_POST as $campo => $valor){
  echo "". $campo ." = ". $valor."<br>";
}

// set post fields
$post = $_POST;/* [
    'monto' => 1220,
    'importe' => 0,
    'lugar'   => "scz",
    'nitBeneficiario'=>'123456',
    'razonSocialBeneficiario'=>'NN',
    'tipoNit' => "ci",
    'reservaId' => "3fa85f64-5717-4562-b3fc-2c963f66afa8",
    'clienteId' => "3fa85f64-5717-4562-b3fc-2c963f66afa6",
    'vueloId' =>"3fa85f64-5717-4562-b3fc-2c963f66afa7",
     'configuracionFacturaId' =>"20b0e326-d97b-4986-9c40-170a8cb9cafb"
];*/

//var_dump($_POST['post']);

/*
$ch = curl_init('https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/create');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
var_dump($response);
*/

$headers = [
                "Content-Type: application/json",
                "X-Content-Type-Options:nosniff",
                "Accept:application/json",
                "Cache-Control:no-cache"
            ];
$url = "https://controldocumentofacturawebapi20221003232458.azurewebsites.net/api/Factura/create";

$curl = curl_init();
        curl_setopt($curl,CURLOPT_URL, $url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_ENCODING, "");
        curl_setopt($curl,CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl,CURLOPT_TIMEOUT, 0);
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl,CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($post)); 
        //curl_setopt($curl, CURLOPT_USERPWD,  $auth);  
        curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);

         $result = curl_exec($curl);
         curl_close($curl);
$id_factura=$result;
$id_factura=str_replace('"',"",$id_factura);
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
</div>
</div class="col-sm-3"></div>      

</html>