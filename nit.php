<?php
require_once('vendor/autoload.php');

// Cargar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function callAPINit($url, $data){
  $curl = curl_init($url);

  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $headers = array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}


// URL de la API
$endpoint = 'https://consultareceptores.feel.com.gt/rest/action';

// NIT a consultar
$nit = "1368036";

// Datos a enviar en la petición
$data = array(
	"emisor_codigo" => $_ENV['EMISOR_CODIGO'],
	"emisor_clave" => $_ENV['EMISOR_CLAVE'],
	"nit_consulta" => $nit
);
$json_data = json_encode($data);

// Petición POST a la API
$response = callAPINit($endpoint, $json_data);

// Decodificación de la respuesta JSON
$response_data = json_decode($response, true);

// Imprimir respuesta
print_r($response_data);
