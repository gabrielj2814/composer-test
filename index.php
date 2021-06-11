<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$request = Request::createFromGlobals();

if($request->isMethod("POST")){
    // var_dump($request->request->all());
    $response= new JsonResponse($request->request->all());
    $response->send();

}
else if($request->isMethod("GET")){
    print("GET");
    
}

?>