<?php 

include('Calcular.php');

class Imprimir extends Calcular{

	public funtion Sumar(){
		//estoy llamando al mismo metodo de la clase padre
		parent::Sumar();
		echo 'imprimie el resultado igual a ', $this->resultado;
	}

}

 ?>