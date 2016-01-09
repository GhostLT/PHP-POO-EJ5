<?php 

class Estatico{

private $propiedad;

public function __construct($parametro){
	$this->propiedad=$parametro;

}

public function Impreso(){
	return $this->propiedad;
}

public static funtion ImpresoDos($algo){
	//ojo aqui no puedo usa propiedades cuando tengo un metodo estatico
	return $algo;
}


}

 ?>