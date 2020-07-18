<?php require 'header.php'; ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Editar</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
					<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
					<h4>Nombre</h4>
					<input type="text" name="nombre" value="<?php echo $post['nombre']; ?>">
				<h4>Correo</h4>	
					<input type="text" name="correo" value="<?php echo $post['correo']; ?>" >
				<h4>Estudiante</h4>
					<input type="text" name="estudiante" value="<?php echo $post['estudiante']; ?>">
				<h4>Nota: Si en Estudiante su respuesta es SI favor rellenar los siguientes campos, si es No, solamente rellena los campos de Queja y Sugerencia </h4>
				<br>
				<h4>Telefono</h4>
					<input type="text" name="telefono" value="<?php echo $post['telefono']; ?>">
				<h4>Matricula</h4>
					<input type="text" name="n_control" value="<?php echo $post['n_control']; ?>">
				<h4>Carrera</h4>
					<input type="text" name="carrera" value="<?php echo $post['carrera']; ?>">
				<h4>Semestre</h4>
					<input type="text" name="semestre" value="<?php echo $post['semestre']; ?>">
				<h4>Grupo</h4>		
					<input type="text" name="grupo" value="<?php echo $post['grupo']; ?>">
				<h4>Turno</h4>
					<input type="text" name="turno" value="<?php echo $post['turno']; ?>">
				<h4>Aula</h4>
					<input type="text" name="aula" value="<?php echo $post['aula']; ?>">
				<h4>Queja</h4>
					<textarea name="queja" ><?php echo $post['queja']; ?></textarea>
				<h4>Sugerencia</h4>
					<textarea name="sugerencia" ><?php echo $post['sugerencia']; ?></textarea>
				<h4>Estado</h4>
					<select name="estado">
						<option value="En espera">En espera</option>
						<option value="En proceso">En proceso</option>
						<option value="Finalizado">Finalizado</option>
					</select>
				<h4>Respuesta</h4>
					<input type="text" name="respuesta" value="<?php echo $post['respuesta']; ?>">

					<input type="submit" value="Guardar Datos">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>