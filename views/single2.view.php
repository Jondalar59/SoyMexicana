<?php require 'header.php' ?>
<h2 class="contenedorbotones"> Anota el Folio que se te esta proporcionando para que verifiques el Estado  actual de tu Queja o Sugerencia</h2>
	<div class="contenedor">
		<section class="post">
      
			<article>
				<h2 class="titulo">Folio:<?php echo $post['id'] ?></h2>
				<p class="fecha"><p class="fecha"><?php echo fecha($post['fecha']); ?></p></p>
				<p class="extracto"><b>Estado: </b><?php echo nl2br($post['estado']); ?></p>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
				<p class="extracto"><b>Queja: </b><?php echo nl2br($post['queja']); ?></p>
				<p class="extracto"><b>Sugerencia: </b><?php echo nl2br($post['sugerencia']); ?></p>

				<h3>Si tienes alguna evidencia, ingresa al siguiente enlace. Agrega el Folio que te estamos proporcionando junto con tu evidencia para tener un mayor seguimiento</h3>
				<h3><a href="https://forms.gle/9718AW5cbpZhHfmv9">Enlace</a></h3>
			</article>
		</section>
	</div>

<?php require 'footer.php'; ?>