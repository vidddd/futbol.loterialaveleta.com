<?php include('templates/header.php') ?>

<section class="section cart">
	<div class="wrapper">
		<header class="section__header cart__header">
			<h1 class="section__title cart__title">Pago de pedido</h1>
		</header>
		<section class="cart__list">
			<form action="#" method="POST" class="form-checkout">
				<div id="form-checkout__page1" class="is-visible">
					<section id="form-checkout__billing" class="form-checkout__section">
						<h3 class="form-checkout__title">Datos de facturación</h3>
						<div class="form__item">
							<label for="unica_direccion" class="form__label">
								<input type="checkbox" name="unica_direccion" id="unica_direccion" checked> Usar como dirección de envío
							</label>
						</div>
						<fieldset class="form__item">
							<label for="particular" class="form__label">
								<input type="radio" name="tipo_usuario" id="particular" value="particular" checked> Particular
							</label>
							<label for="empresa" class="form__label">
								<input type="radio" name="tipo_usuario" id="empresa" value="empresa"> Empresa
							</label>
						</fieldset>
						<div class="grid grid--2-cols">
							<div class="form__item">
								<label for="nombre" class="form__label">Nombre</label>
								<input type="text" name="nombre" id="nombre" required>
							</div>
							<div class="form__item">
								<label for="apellidos" class="form__label">Apellidos</label>
								<input type="text" name="apellidos" id="apellidos" required>
							</div>
							<div class="form__item form__item--company">
								<label for="razon_social" class="form__label">Razón social</label>
								<input type="text" name="razon_social" id="razon_social">
							</div>
							<div class="form__item">
								<label for="nif" class="form__label">NIF / CIF</label>
								<input type="text" name="nif" id="nif" required>
							</div>
							<div class="form__item">
								<label for="email" class="form__label">Email</label>
								<input type="email" name="email" id="email">
							</div>
							<div class="form__item">
								<label for="telefono" class="form__label">Teléfono</label>
								<input type="text" name="telefono" id="telefono">
							</div>
							<div class="form__item">
								<label for="direccion" class="form__label">Dirección</label>
								<input type="text" name="direccion" id="direccion" required>
							</div>
							<div class="form__item">
								<label for="cp" class="form__label">C.P.</label>
								<input type="text" name="cp" id="cp" required>
							</div>
							<div class="form__item">
								<label for="poblacion" class="form__label">Población</label>
								<input type="text" name="poblacion" id="poblacion" required>
							</div>
							<div class="form__item">
								<label for="provincia" class="form__label">Provincia</label>
								<input type="text" name="provincia" id="provincia">
							</div>
						</div>
					</section>
					<div id="form-checkout__sending" >
						<section class="form-checkout__section">
							<h3 class="form-checkout__title">Datos de envío</h3>
							<div class="grid grid--2-cols">
								<div class="form__item">
									<label for="envio_nombre" class="form__label">Nombre</label>
									<input type="text" name="envio_nombre" id="envio_nombre">
								</div>
								<div class="form__item">
									<label for="envio_apellidos" class="form__label">Apellidos</label>
									<input type="text" name="envio_apellidos" id="envio_apellidos">
								</div>
								<div class="form__item">
									<label for="envio_email" class="form__label">Email</label>
									<input type="email" name="envio_email" id="envio_email">
								</div>
								<div class="form__item">
									<label for="envio_telefono" class="form__label">Teléfono</label>
									<input type="text" name="envio_telefono" id="envio_telefono">
								</div>
								<div class="form__item">
									<label for="envio_direccion" class="form__label">Dirección</label>
									<input type="text" name="envio_direccion" id="envio_direccion">
								</div>
								<div class="form__item">
									<label for="envio_cp" class="form__label">C.P.</label>
									<input type="text" name="envio_cp" id="envio_cp">
								</div>
								<div class="form__item">
									<label for="envio_poblacion" class="form__label">Población</label>
									<input type="text" name="envio_poblacion" id="envio_poblacion">
								</div>
								<div class="form__item">
									<label for="envio_provincia" class="form__label">Provincia</label>
									<input type="text" name="envio_provincia" id="envio_provincia">
								</div>
							</div>
						</section>
					</div>
					<div class="form-checkout__alert">
						<p>Existen campos obligatorios sin rellenar</p>
					</div>
					<footer class="form-checkout__buttons">
						<a href="#form-checkout__page2" id="gateway-trigger" class="btn btn--primary">Forma de pago <span class="icon-arrow_forward"></span></a>
					</footer>
				</div>
				<div id="form-checkout__page2">
					<section id="form-checkout__gateway" class="form-checkout__section">
						<h3 class="form-checkout__title">Forma de pago</h3>
						<p class="form-checkout__intro">Por favor, selecciona una forma de pago:</p>
						<fieldset class="form__item gateway">
							<label for="pasarela_visa" class="form__label--vertical">
								<img src="images/tarjetas/visa.svg" alt="visa" class="gateway__logo">
								<span class="gateway__name">Visa</span>
								<input type="radio" name="pasarela" value="visa" id="pasarela_visa" required>
							</label>
							<label for="pasarela_mastercard" class="form__label--vertical">
								<img src="images/tarjetas/mastercard.svg" alt="mastercard" class="gateway__logo">
								<span class="gateway__name">Mastercard</span>
								<input type="radio" name="pasarela" value="mastercard" id="pasarela_mastercard">
							</label>
							<label for="pasarela_paypal" class="form__label--vertical">
								<img src="images/tarjetas/paypal.svg" alt="paypal" class="gateway__logo">
								<span class="gateway__name">Paypal</span>
								<input type="radio" name="pasarela" value="paypal" id="pasarela_paypal">
							</label>
						</fieldset>
						<div class="form__item form__item--acceptance">
							<label for="aceptacion" class="form__label">
								<input type="checkbox" name="aceptacion" id="aceptacion" required> He leído y acepto las <a href="condiciones-compra.php">Condiciones de compra</a> y entiendo la información acerca del uso de mis datos personales explicada en la <a href="aviso-legal.php">Políticas de Privacidad</a>.
							</label>
						</div>
						<div class="form__buttons">
							<a href="#form-checkout__page1" id="gateway-trigger-2" class="btn btn--outline"><span class="icon-arrow_back"></span> Volver</a>
							<button type="submit" class="btn btn--primary">Realizar pago</button>
						</div>
					</section>
				</div>
			</form>
			
		</section>
		
		<aside class="cart__summary">
			<div class="cart-summary">
				<h3 class="cart-summary__title">Resumen del pedido</h3>
				<p class="cart-summary__total-products"><strong>Productos:</strong> <span>2</span></p>
				<p class="cart-summary__subtotal"><strong>Subtotal:</strong> <span>30</span> €</p>
				<p class="cart-summary__taxes"><strong>IVA:</strong> <span>5,25</span> €</p>
				<p class="cart-summary__total"><strong>Total:</strong> <span>35,25</span> €</p>
			</div>
		</aside>

	</div>
</section>


<?php include('templates/footer.php') ?>
