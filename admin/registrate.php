<?php session_start();
require 'config.php';
require '../functions.php';



$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
	header("Location: ../error.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

     //   echo "$usuario . $password . $password2";

        $errores = "";

        if(empty($usuario) or empty($password) or empty($password2)) {
            $errores .= '<li>Por favor rellena los datos correctamente</li>';
        }else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();;
            }

           $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();

            if ($resultado != false) {
                $errores .= '<li>El nombre de usuario ya existe</li>';
            }

            //cifrar la contraseña
            $password = hash('sha512', $password);
            $password2 = hash('sha512', $password2);
            
            if ($password != $password2){
                $errores .= '<li>Las contraseñas no son iguales</li>';
            }
        }
            if ($errores == ''){
                $statement =$conexion->prepare('INSERT INTO usuarios(id, usuario, pass) VALUES (null, :usuario, :pass)');
                $statement->execute(array(':usuario' => $usuario, ':pass' => $password));

                header('Location: ' . RUTA . '/admin/consulta.php');

            }
    }
require '../views/admin_registrate.view.php';
?>

