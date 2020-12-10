<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "vendor/autoload.php";
include 'api/phplib-football/FootballData.php';

//use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
//use Psr7;

$laqu = []; // Resultado de la Quiniela
$qgol = []; // Resultado Quinigol

$client = new GuzzleHttp\Client(['base_uri' => 'https://loterialaveleta.com/']);
// Cogemos los resultados
try {
   $response = $client->request('GET', 'resultados/dameresultados');
} catch (RequestException $e) {
   echo print_r($e->getRequest());
   if ($e->hasResponse()) {
      // echo Psr7\str($e->getResponse());
   }
}
$body = $response->getBody();
$content = json_decode($body->getContents());

$laqu = $content->data->laqu[0]; // Resultados Ultima Quiniela
$qgol = $content->data->qgol[0]; // Resultados Ultimo Quinigol

// Cogemos los proximos sorteos de Quiniela y Quinigol
try {
   $response = $client->request('GET', 'sorteos/proximosorteo/LAQU');
} catch (RequestException $e) {
   echo print_r($e->getRequest());
   if ($e->hasResponse()) {
      echo print_r($e->getResponse());
   }
}
$body = $response->getBody();
$content = json_decode($body->getContents());
$proximaQuiniela = $content->data[0];

try {
   $response = $client->request('GET', 'sorteos/proximosorteo/QGOL');
} catch (RequestException $e) {
   echo print_r($e->getRequest());
   if ($e->hasResponse()) {
      echo print_r($e->getResponse());
   }
}
$body = $response->getBody();
$content = json_decode($body->getContents());
$proximoQuinigol = $content->data[0];

$api = new FootballData();
$standings = $api->findStandingsByCompetition(2014)->standings; // Clasificacion Primera
$clasificacion = reset($standings);

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
   // 'cache' => 'cache',
   'cache' => false,
   'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());


echo $twig->render('index.html.twig', [
   'clasificacion' => $clasificacion->table,
   'laqu' => $laqu,
   'partidos_laqu' => json_decode($laqu->partidos),
   'qgol' => $qgol,
   'partidos_qgol' => json_decode($qgol->partidos),
   'proximaQuiniela' => $proximaQuiniela,
   'proximos_partidos_laqu' => json_decode($proximaQuiniela->field_partidos_value),
   'proximoQuinigol' => $proximoQuinigol,
   'proximos_partidos_qgol' => json_decode($proximoQuinigol->field_partidos_value),
]);
