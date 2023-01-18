<?php

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

//Vendría del textarea
$texto = "Los coleccionistas de juegos retro";
$textoArticulo = "Escribe un artículo sobre " . $texto;

$response = $client->request('POST', 'https://api.openai.com/v1/completions', [
  'body' => '{"model": "text-davinci-003", "prompt": "'.$textoArticulo.'", "temperature": 0, "max_tokens": 1000, "n": 1}',
  'headers' => [
    'Authorization' => 'Bearer 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',
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);

$respuesta = $response->getBody();

$respuestaJSON = json_decode($respuesta);

echo $respuestaJSON->choices[0]->text;
echo "<br>";

$textoImagen = $texto;
$response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
  'body' => '{"prompt": "'.$textoImagen.'", "size": "1024x1024", "n": 1}',
  'headers' => [
    'Authorization' => 'Bearer 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',
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);

$respuesta = $response->getBody();

$respuestaJSON = json_decode($respuesta);

echo $respuestaJSON->data[0]->url;

?>