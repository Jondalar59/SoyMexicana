<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Mi Primer Blog</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Soy Mexicana</a></p>
			</div>

			<div class="derecha">
				<form action="<?php echo RUTA; ?>/buscaradmin.php" method="get" name="busqueda" class="buscar">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
				
				<nav class="menu">
					<ul>
						<li>
							<a href="https://twitter.com/TecNMEscarcega"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/TecNMCampusEscarcega"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="<?php echo RUTA; ?>/admin/cerrar.php">Cerrar Sesion<i class="icono fa fa-lock"></i></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>
<div class="contenedor">
	
	<h2><?php if (isset($_SESSION['usuario'])) { echo " Hola " . $_SESSION['usuario'];} else{ echo "";} ?></h2>
	<br>
	<!--<a href="registrate.php" class="btn">Registrar Nuevo Administrador</a>-->
	

	<?php foreach($posts as $post): ?>
	<section class="post">
	<article>
	<h2 class="titulo">Titulo: <a href="single.php?id=<?php echo $post['queja']; ?>"><?php echo $post['queja'] ?></a></h2>
					<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
					<p class="extracto">Categoría: <?php echo $post['estudiante'] ?></p>
					<a href="../single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
			
	</article>
	</section>
	<?php endforeach; ?>
</div>

<?php require '../paginacion.php'; ?>

<!--<a href="cerrar.php" class="btn ConsultaAlineacionDerecha">Cerrar Sesion</a>-->

<?php require '../views/footer.php'; ?>