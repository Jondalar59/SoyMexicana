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
				<h4>Quien Emite la Queja y/o Sugerencia</h4>
				<select name="estudiante">
				<option value="Anonimo">Seleccionar</option>
				<option value="Anonimo">Anonimo</option>
				<option value="Estudiante">Estudiante</option>
				<option value="Personal">Personal</option>
				<option value="Publico en General">Publico en General</option>
				</select>
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
                <h4>Nombre</h4>
					<input type="text" name="nombre" placeholder="Nombre">
				<h4>Correo</h4>	
					<input type="text" name="correo" placeholder="Correo">
					
				<h4>Telefono </h4>
					<input type="text" name="telefono" placeholder="Opcional">
					<h4>En caso de ser estudiante proporcione su numero de Matricula</h4>
					<input type="text" name="n_control" placeholder="Matricula">
				
				
				<h4>Queja: Describa brevemente lugar, fecha, personas que intervinieron y una breve descripción de los hechos</h4>
					<textarea name="queja" placeholder="Queja"></textarea>
				<h4>Sugerencia: Describra brevemente su sugerencia para mejora del servicio</h4>
					<textarea name="sugerencia" placeholder="Sugerencia"></textarea>
					

					<input type="submit" value="Crear">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>