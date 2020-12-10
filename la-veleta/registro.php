<?php include('templates/header.php') ?>

<section id="registro" class="section">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title section__title--centered">Registro de usuario</h1>
		</header>

		<div class="section__main">
			<form action="" class="form-register">
				<div class="card">
					<div class="form__item">
						<label for="registro_nombre_usuario" class="form__label">Nombre de usuario</label>
						<input type="text" name="nombre_usuario" id="registro_nombre_usuario">
					</div>
					<div class="form__item">
						<label for="registro_password" class="form__label">Contraseña</label>
						<input type="password" name="password" id="registro_password">
					</div>
					<div class="form__item">
						<label for="registro_nombre" class="form__label">Nombre</label>
						<input type="text" name="nombre" id="registro_nombre">
					</div>
					<div class="form__item">
						<label for="registro_apellidos" class="form__label">Apellidos</label>
						<input type="text" name="apellidos" id="registro_apellidos">
					</div>
					<div class="form__item">
						<label for="registro_tipo_documento" class="form__label">Tipo documento</label>
						<select name="tipo_documento" id="registro_tipo_documento">
							<option value="">Seleccionar</option>
							<option value="1">DNI</option>
							<option value="2">CIF</option>
						</select>
					</div>
					<div class="form__item">
						<label for="registro_dni_nr" class="form__label">Número DNI / CIF</label>
						<input type="text" name="dni_nr" id="registro_dni_nr">
					</div>
					<div class="form__item">
						<label for="registro_fecha_nacimiento" class="form__label">Fecha nacimiento</label>
						<input type="date" name="fecha_nacimiento" id="registro_fecha_nacimiento">
					</div>
					<div class="form__item">
						<label for="registro_email" class="form__label">Email</label>
						<input type="email" name="email" id="registro_email">
					</div>
					<div class="form__item">
						<label for="registro_telefono" class="form__label">Telefono</label>
						<input type="text" name="telefono" id="registro_telefono">
					</div>
					<div class="form__item">
						<label for="registro_direccion" class="form__label">Direccion</label>
						<input type="text" name="direccion" id="registro_direccion">
					</div>
					<div class="form__item">
						<label for="registro_cp" class="form__label">CP</label>
						<input type="text" name="cp" id="registro_cp">
					</div>
					<div class="form__item">
						<label for="registro_poblacion" class="form__label">Poblacion</label>
						<input type="text" name="poblacion" id="registro_poblacion">
					</div>
					<div class="form__item form__item--second-col">
						<label for="registro_acceptance" class="form__label">
							<input type="checkbox" name="acceptance" id="registro_acceptance"> He leído y acepto los <a href="#">términos y condiciones</a>
						</label>
					</div>
					<div class="form__item form__item--second-col">
						<button class="btn btn--primary btn--block">Registrarse</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
