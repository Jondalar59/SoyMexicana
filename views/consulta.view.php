<?php require 'header.php' ?>

	<div class="contenedor">
		<?php foreach($posts as $post): ?>
			<div class="post">
				<article>
					<h2 class="titulo">Titulo: <a href="single.php?id=<?php echo $post['queja']; ?>"><?php echo $post['queja'] ?></a></h2>
					<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
					<p class="extracto"><?php echo $post['estado'] ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>

	</div>

<?php require 'footer.php'; ?>