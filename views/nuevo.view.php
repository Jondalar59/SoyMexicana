<?php require 'header.php' ?>

	<div class="contenedor">
		<div class="post">
			<article>
			<h2 class="titulo">Nueva Queja o Sugerencia</h2> 
				<br>
				<h3>*Para validar su queja y/o sugerencia deberá requisitar algún 
				dato que nos permita localizarle y darle respuesta, esta información es de carácter CONFIDENCIAL.</h3>
				<h3>*Los campos  que no son rellandos, se tomaran como Anonimo.</h3>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
				<br>
				<h4>Nombre</h4>
					<input type="text" name="nombre" placeholder="Nombre">
				<h4>Correo</h4>	
					<input type="text" name="correo" placeholder="Correo">
				<h4>Estudiante</h4>
				<select name="estudiante">
						<option value="Anonimo">Seleccionar</option>
						<option value="Anonimo">Anonimo</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
					</select>
				<h4>Nota: Si en Estudiante su respuesta es SI favor rellenar los siguientes campos, si es No, solamente rellena los campos de Queja y Sugerencia </h4>
				<br>
				<h4>Telefono</h4>
					<input type="text" name="telefono" placeholder="Telefono">
				<h4>Matricula</h4>
					<input type="text" name="n_control" placeholder="Matricula">
				<h4>Carrera</h4>
					<select name="carrera">
						<option value="Anonimo">Seleccionar</option>
						<option value="Anonimo">Anonimo</option>
						<option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
						<option value="Ingenieria en Energias Renovables">Ingenieria en Energias Renovables</option>
						<option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
						<option value="Licenciatura en Administracion">Licenciatura en Administracion</option>
						<option value="Licenciatura en Gastronomia">Licenciatura en Gastronomia</option>
						<option value="Licenciatura en Turismo">Licenciatura en Turismo</option>
					</select>
				<h4>Semestre</h4>
				<select name="semestre">
						<option value="Anonimo">Seleccionar</option>
						<option value="Anonimo">Anonimo</option>
						<option value="Primero">Primero</option>
						<option value="Segundo">Segundo</option>
						<option value="Tercero">Tercero</option>
						<option value="Cuarto">Cuarto</option>
						<option value="Quinto">Quinto</option>
						<option value="Sexto">Sexto</option>
						<option value="Septimo">Septimo</option>
						<option value="Octavo">Octavo</option>
						<option value="Noveno">Noveno</option>
					</select>
				<h4>Grupo</h4>		
					<input type="text" name="grupo" placeholder="Grupo">
				<h4>Turno</h4>
				<select name="turno">
						<option value="Anonimo">Seleccionar</option>
						<option value="Anonimo">Anonimo</option>
						<option value="Matutino">Matutino</option>
						<option value="Vespertino">Vespertino</option>
					</select>
				<h4>Aula</h4>
					<input type="text" name="aula" placeholder="Aula">
				<h4>Queja</h4>
					<textarea name="queja" placeholder="Queja"></textarea>
				<h4>Sugerencia</h4>
					<textarea name="sugerencia" placeholder="Sugerencia"></textarea>
					

					<input type="submit" value="Crear">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>