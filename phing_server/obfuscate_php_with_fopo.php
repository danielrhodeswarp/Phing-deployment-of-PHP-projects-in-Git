<?php

if(count($argv) != 3)
{
	echo "\n" . 'Usage: ' . basename(__FILE__) . ' filename level(1,2,3)' . "\n\n";
	exit;
}

$filename = $argv[1];
$level = $argv[2];



include 'HTTP/Request2.php';

$request = new HTTP_Request2('http://fopo.com.ar/index.php?ts=' . time());

$request->setMethod(HTTP_Request2::METHOD_POST)
    ->addPostParameter('level', $level)
    ->addPostParameter('submit', 'submit')
    ->addUpload('file', $filename, basename($filename), 'application/x-php');
    
    
    
   $response = $request->send();
   
   
   //print_r($response->getHeader());
    
    
    //print_r($response->getBody());
    
    echo $response->getBody();