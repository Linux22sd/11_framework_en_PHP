<?php

require __DIR__."/../vendor/autoload.php";
use App\Http\Request;

// crea una instancia de la clase Request
$request = new Request;

// 03 ejecutar metodo send de la clase Request
$request->send();

?>