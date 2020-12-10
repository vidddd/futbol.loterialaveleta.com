<?php include('templates/header.php') ?>

<section class="section cart">
	<div class="wrapper">
		<header class="section__header cart__header">
			<h1 class="section__title cart__title">Carrito</h1>
		</header>
		<section class="cart__list">
			<?php for($i=1;$i<=4;$i++): ?>
			<article class="full-size product">

				<div class="product__info">
					<div class="product__main">
						<h3 class="product__title">Décimo lotería nr. 88888</h3>
						<p class="product__description">Décimo número <span class="product__ref">88888</span> para el sorteo del <span class="product__date">Martes, 22/01/2020</span></p>
					</div>
					<img src="images/decimo_220x131.png" alt="Décimo de lotería nr. 88888" class="product__image">
				</div>
				<div class="product__price-quantity">
					<div class="product__data product__data--unit">
						<span class="product__label">Precio</span>
						<div class="product__container">
							<span class="product__currency">€</span>
							<span class="product__nr">10</span>
						</div>
					</div>
					<div class="product__data product__data--quantity">
						<span class="product__label">Cant.</span>
						<div class="product__container">
							<a href="#" class="icon-remove"></a>
							<input type="number" name="quantity" value="1" min="0">
							<a href="#" class="icon-add"></a>
						</div>
					</div>
					<div class="product__data product__data--total">
						<span class="product__label">Subt.</span>
						<div class="product__container">
							<span class="product__currency">€</span>
							<span class="product__nr">10</span>
						</div>
					</div>
				</div>
			</article>
			<?php endfor; ?>
			<footer class="cart__buttons">
				<a href="#" class="btn btn--outline">Vaciar carrito</a>
				<a href="comprar.php" class="btn btn--primary">Seguir comprando</a>
			</footer>
		</section>
		
		<aside class="cart__summary">
			<div class="cart-summary">
				<p class="cart-summary__intro">¿TIENES ALGÚN CÓDIGO PROMOCIONAL? Introdúcelo más adelante en la página de pago</p>
				<p class="cart-summary__total-products"><strong>Productos:</strong> <span>2</span></p>
				<p class="cart-summary__subtotal"><strong>Subtotal:</strong> <span>30</span> €</p>
				<p class="cart-summary__taxes"><strong>IVA:</strong> <span>5,25</span> €</p>
				<p class="cart-summary__total"><strong>Total:</strong> <span>35,25</span> €</p>
			</div>
			<a href="checkout.php" class="btn btn--primary btn--block">Tramitar pedido</a>
		</aside>

	</div>
</section>


<?php include('templates/footer.php') ?>
