<?php

error_reporting(E_ALL ^ E_NOTICE);
require_once "vendor/autoload.php";

use GuzzleHttp\Exception\ClientException;
$client = new GuzzleHttp\Client();
echo "55555";
 die;

try {
    $res = $client->request("GET", "");
    $con = $res->getBody()->getContents();
   // $results =  json_decode($con, true);
} catch (ClientException $e) {
   // $res['is_error'] = true;
   // $con = $e->getResponse()->getBody()->getContents();
   // $results = array_merge($results =  json_decode($con, true), $res);
}
return $results;
