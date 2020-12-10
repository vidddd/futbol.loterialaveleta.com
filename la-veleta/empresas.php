<?php include('templates/header.php') ?>
<div class="company-hero">
	<div class="wrapper">
		<div class="company-hero__texts">
			<h1 class="company-hero__title">Lotería para empresas</h1>
			<p class="company-hero__excerpt">Simplifica la gestión, reserva y compra de la Lotería de Navidad de tu empresa con nuestro servicio de Lotería para Empresas</p>
			<div class="company-hero__buttons">
				<a href="#form-company" class="btn btn--primary">Contratar</a>
				<a href="#" class="btn btn--outline btn--negative">Acceder</a>
			</div>
		</div>
		<img src="images/bg-company.png" alt="Lotería para empresas" class="company-hero__image">
	</div>
</div>

<section id="empresas" class="section company">
	<div class="wrapper">
		<header class="section__header">
			<h2 class="section__title company__title">¿Cómo funciona la lotería para empresas?</h2>
		</header>

		<div class="section__main">
			<section class="how-it-works">
				<ul class="how-it-works__list">
					<li class="how-it-works__item">
						<h3 class="how-it-works__title">Reserva tu número o serie</h3>
						<p class="how-it-works__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad officia ab necessitatibus praesentium possimus in voluptatibus.</p>
					</li>
					<li class="how-it-works__item">
						<h3 class="how-it-works__title">Accede a tu web personalizada</h3>
						<p class="how-it-works__text">Molestias totam consequatur, suscipit provident nostrum expedita commodi sapiente laboriosam molestiae officiis.</p>
					</li>
					<li class="how-it-works__item">
						<h3 class="how-it-works__title">Cada empleado puede reservar sus décimos o participaciones</h3>
						<p class="how-it-works__text">Necessitatibus soluta omnis veritatis, debitis recusandae tempora nisi, quaerat voluptatem in dolorum, at suscipit nihil odio minus.</p>
					</li>
					<li class="how-it-works__item">
						<h3 class="how-it-works__title">Compra los décimos</h3>
						<p class="how-it-works__text">Illum expedita dolorem maiores quod illo a nobis mollitia veritatis quo dolorum tempora, odit porro eaque, voluptatibus dolore.</p>
					</li>
					<li class="how-it-works__item">
						<h3 class="how-it-works__title">Cobra tu premio</h3>
						<p class="how-it-works__text">Fuga officia alias laudantium vel natus vitae repellendus? Ipsam ea placeat beatae obcaecati voluptates itaque necessitatibus.</p>
					</li>
				</ul>

				<div class="how-it-works__aside">
					<figure class="how-it-works__video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/39-4p9IpE3s" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<figcaption>Dale al play y te lo explicamos</figcaption>
					</figure>
					<blockquote class="how-it-works__claim">
						<p>Gestiona la lotería de tu empresa de forma fácil con La Veleta</p>
					</blockquote>
				</div>
			</section>
			<section id="register" class="full-size register">
				<div class="wrapper">
					<h3 class="register__title">Inscribirse en el servicio para empresas</h3>
					<div class="register__grid">
						<div class="register__image">
							
						</div>
						<div class="register__form">
							<form action="#" class="form form-company">
								<div class="form__item">
									<label for="nombre" class="form__label">Nombre</label>
									<input type="text" name="nombre" id="nombre">
								</div>
								<div class="form__item">
									<label for="empresa" class="form__label">Empresa</label>
									<input type="text" name="empresa" id="empresa">
								</div>
								<div class="form__item">
									<label for="email" class="form__label">Email</label>
									<input type="email" name="email" id="email">
								</div>
								<div class="form__item">
									<label for=telefono class="form__label">Teléfono</label>
									<input type="text" name=telefono id=telefono>
								</div>
								<div class="form__item form__item--textarea">
									<label for="mensaje" class="form__label">Mensaje</label>
									<textarea name="mensaje" id="mensaje"></textarea>
								</div>
								<div class="form__item form__item--buttons">
									<button type="submit" class="btn btn--primary">Inscribirse</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
