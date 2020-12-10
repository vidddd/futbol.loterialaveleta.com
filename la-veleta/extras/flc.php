<aside id="flc" class="fixed-login-container flc">

	<div id="flc__login-container" class="flc__login-container">
		<form data-drupal-selector="user-login-form" action="/beta2/web/user/login" method="post" accept-charset="UTF-8" class="form login-form">
			<div class="form__item">
				<label for="name">Usuario</label>
				<input type="text" name="name" id="name">
			</div>
			<div class="form__item">
				<label for="password">Contraseña</label>
				<input type="password" name="password" id="password">
			</div>
			<div class="form__item">
				<button type="button" class="btn btn--primary login-form__btn">Entrar</button>
			</div>
			<div class="form__item login-form__reminder">
				<a href="recuperar.php">He olvidado la contraseña</a>
				<a href="registro.php">Registrarse</a>
			</div>
		</form>
	</div>

	<a id="flc__btn" href="#flc__login" class="flc__btn">
		<div class="flc__icon">
			<span class="icon-person"></span>
		</div>
		<span class="flc__text">Log In</span>
	</a>
</aside>