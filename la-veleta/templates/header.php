<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>

	<link rel="stylesheet" href="https://i.icomoon.io/public/4093824b54/Laveleta/style.css">
	<link rel="stylesheet" href="style.min.css">
	<link rel="stylesheet" href="extras/style2.css">

	<!-- remove this if you use Modernizr -->
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
</head>
<body>
	<header class="site-header">
		<div class="site-header__masthead">
			<div class="wrapper">
				<h1 class="site-header__logo"><a href="/">Lotería La Veleta</a></h1>
				<a href="#" id="menu-trigger" class="menu-trigger">
					<span class="menu-trigger__text">Menu</span>
					<div class="menu-trigger__icon">
						<span class="menu-trigger__line"></span>
						<span class="menu-trigger__line"></span>
						<span class="menu-trigger__line"></span>
					</div>
				</a>
				<nav id="site-header__menu" class="site-header__menu main-menu">
					<a href="index.php" class="main-menu__item active">Inicio</a>
					<a href="resultados.php" class="main-menu__item">Resultados</a>
					<a href="botes.php" class="main-menu__item">Bote</a>
					<a href="grupales.php" class="main-menu__item">Peñas</a>
					<a href="comprar.php" class="main-menu__item">Comprar lotería</a>
					<a href="empresas.php" class="main-menu__item">Lotería empresas</a>
					<a href="comprobar.php" class="main-menu__item">Comprobar lotería</a>
				</nav>
			</div>
		</div>
		<div class="site-header__topbar">
			<div class="wrapper">
				<div class="address">
					<p class="site-header__btn address__item address__item--street"><span class="address__text">Av. García Noblejas 1, Madrid</span></p>
					<a href="tel:913671129" class="site-header__btn address__item"><span class="site-header__icon icon-phone_iphone"></span> <span class="address__text">91 367 11 29</span></a>
					<a href="mailto:hola@loterialaveleta.com" class="site-header__btn address__item"><span class="site-header__icon icon-emailmailmarkunreadlocal_post_office"></span> <span class="address__text">hola@loterialaveleta.com</span></a>
				</div>
				<div class="shop">
					<div class="dropdown shop__item">
						<a href="#mini-cart" class="site-header__btn dropdown__trigger"><span class="site-header__icon icon-local_grocery_storeshopping_cart"></span></a>
						<aside id="mini-cart" class="dropdown__panel mini-cart">
							<div class="scroll-container">
								<div class="scroll-container__content">
									<?php for($i=1;$i<=10;$i++): ?>
									<article class="mini-cart__product">
										<div class="mini-cart__image">
											<img src="images/decimo_220x131.png" alt="">
										</div>
										<div class="mini-cart__detail">
											<h6 class="mini-cart__title">Décimo nr. <strong>88888</strong></h6>
											<p class="mini-cart__description"><small>
												<span class="cart__lottery-quantity">3</span> x <span class="cart__lottery_unity">1.020 €</span>
											</small></p>
										</div>
									</article>
									<?php endfor; ?>
								</div>
							</div>
							<div class="mini-cart__summary">
								<p class="mini-cart__total">Total: <strong>3060 €</strong></p>
								<a href="carrito.php" class="btn btn--primary btn--block">Ir al carrito</a>
							</div>
						</aside>
					</div>
					<div class="dropdown shop__item">
						<a href="#login-form" class="site-header__btn dropdown__trigger" id="shop__login"><span class="site-header__icon icon-person"></span></a>
						<aside id="login-form" class="dropdown__panel">
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
						</aside>
					
					</div>
				</div>
			</div>
		</div>
	</header>
	<main class="site-main">