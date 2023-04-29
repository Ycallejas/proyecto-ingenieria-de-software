<?php
require_once('modelo/index.php');

class controladormodelo{
	private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    static function mostrarProductos(){
    	$producto = new Modelo();
    	$query = "SELECT * FROM producto ORDER BY id";
		$resultado = $producto->mostrar($query);
		return $resultado;
    	//require_once("vista/index.php");
    }




}

?>