<?php 

include_once('Imprimir.php');

$calculadora = new Imprimir(1,6);
$calculadora->Sumar();

echo "<h1>ESTATICO</h1>";
include_once('Estatico.php');

echo Estatico::ImpresoDos("Esto e slo que paso por el static function sin necesidad de crar un objeto");


 ?>