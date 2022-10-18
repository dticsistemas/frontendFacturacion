<?php
/*
foreach($_POST as $campo => $valor){
  echo "". $campo ." = ". $valor."<br>";
}
*/
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

header("location:facturacionprint.php?factura=".$id_factura); 
    	?>