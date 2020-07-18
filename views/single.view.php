<?php require 'header.php' ?>

	<div class="contenedor">
		<section class="post">
			<article>
				<h2 class="titulo">Folio:<?php echo $post['id'] ?></h2>
				<p class="fecha"><p class="fecha"><?php echo fecha($post['fecha']); ?></p></p>
				<p class="extracto"><b>Estado: </b><?php echo nl2br($post['estado']); ?></p>
				<p class="extracto"><b>Queja: </b><?php echo nl2br($post['queja']); ?></p>
				<p class="extracto"><b>Sugerencia: </b><?php echo nl2br($post['sugerencia']); ?></p>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
		
				<p class="extracto"><b>Respuesta: </b><?php echo nl2br($post['respuesta']); ?></p>
			</article>
		</section>
	</div>

<?php require 'footer.php'; ?>