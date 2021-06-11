<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$request = Request::createFromGlobals(); //acá creamos el objeto request

if($request->isMethod("POST")){
    // $responseJson= new JsonResponse();
    print("POST");
}
else if($request->isMethod("GET")){
    print("GET");
    
}

?>