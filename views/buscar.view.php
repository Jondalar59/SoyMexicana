<?php require 'header.php' ?>

	<div class="contenedor">
		<h2><?php echo $titulo; ?></h2>
		<?php foreach($resultados as $post): ?>
			<div class="post">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>">Folio: <?php echo $post['id'] ?></a></h2>
					<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
					
					<p class="extracto"><?php echo $post['estado'] ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>

	</div>

<?php require 'footer.php'; ?>