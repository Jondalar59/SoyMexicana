<?php session_start();
require 'config.php';
require '../functions.php';

// 1.- Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();

// Determinamos si se estan enviado datos por el metodo POST o GET
# Si se envian por POST significa que el usuario los ha enviado desde el formulario
# por lo que tomamos los datos y los cambiamos en la base de datos.

# De otra forma significa que hay datos enviados por el metodo GET
# es decir, el ID que pasamos por la URL, si es asi entonces traemos los 
# datos de la base de datos a pantalla para que el usuario los pueda modificar.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = limpiarDatos($_POST['id']);
	$estado = limpiarDatos($_POST['estado']);
	$respuesta = limpiarDatos($_POST['respuesta']);


	$statement = $conexion->prepare(
		'UPDATE formulario SET estado = :estado, respuesta = :respuesta  WHERE id = :id'
	);

	$statement->execute(array(
		':id' => $id,
		':estado' => $estado,
		':respuesta' => $respuesta
	));

	header("Location: " . RUTA . '/admin/consulta.php');

} else {
	$id_articulo = id_articulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: ' . RUTA . '/admin/consulta.php');
	}

	// Obtenemos el post por id
	$post = obtener_post_por_id($conexion, $id_articulo);

	// Si no hay post en el ID entonces redirigimos.
	if (!$post) {
		header('Location: ' . RUTA . '/admin/consulta.php');
	}
	
	
	$post = $post[0];
}


require '../views/editar.view.php';

?>