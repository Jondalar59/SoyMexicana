<?php 

require 'admin/config.php';
require 'functions.php';

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos que haya contenido en GET
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement =$conexion->prepare(
		"SELECT * FROM formulario WHERE id LIKE :busqueda"
	);
	$statement->execute(array(':busqueda' => "%$busqueda%"));

	$resultados = $statement->fetchAll();
	
	if (empty($resultados)) {
		$titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
	} else {
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
	}

} else {
	header('Location:' . RUTA . '/consulta.php');
}

require 'views/buscar.view.php';

?>