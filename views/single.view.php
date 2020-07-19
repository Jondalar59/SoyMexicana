<?php require 'header.php' ?>

	<div class="contenedor">
		<section class="post">
      
			<article>
			
				<h2 class="titulo">Titulo:<?php echo $post['queja'] ?></h2>
				<p class="fecha"><p class="fecha"><?php echo fecha($post['fecha']); ?></p></p>
				<p class="extracto"><b>Categoría: </b><?php echo nl2br($post['estudiante']); ?></p>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
				<p class="extracto"><b>Descripción: </b><?php echo nl2br($post['sugerencia']); ?></p>

			</article>
		</section>
	</div>

	<aside class="contenedor">

		<form action="http://localhost/SoyMexicana/admin/comentario.php?id=<?php echo $_GET["id"]; ?>" method="POST">
		<textarea name="comentario" placeholder="Comentario"></textarea>
		
		<input type="submit" value="Comentar">


		</form>
	</aside>

<?php require 'footer.php'; ?>