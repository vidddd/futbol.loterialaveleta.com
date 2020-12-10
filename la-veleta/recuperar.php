<?php include('templates/header.php') ?>

<section id="registro" class="section">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title section__title--centered">Recuperar contraseña</h1>
		</header>

		<div class="section__main">
			<form action="" class="form-recover">
				<div class="card">
					<div class="form__item">
						<label for="registro_email" class="form__label">Email</label>
						<input type="email" name="email" id="registro_email">
					</div>
					
					<div class="form__item">
						<button class="btn btn--primary btn--block">Recuperar contraseña</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
