<?php 
require 'config.php';
require '../functions.php';



$conexion = conexion($bd_config);


if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = limpiarDatos($_GET['id']);
	$comentario = limpiarDatos($_POST['comentario']);


	// Direccion final del archivo incluyendo el nombre
	# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
	# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
	//$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

	// Subimos el archivo
	//move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare(
		'INSERT INTO comentarios (id_comentario, id_tema, nombre, comentario) 
		VALUES ("" , :id, "Anonimo", :comentario)'
	);
	

	$statement->execute(array(
		':id' => $id,
	    ':comentario' => $comentario
	));


	

	header('Location: ' . RUTA . '/single.php?id='.$id . "");
}





?>