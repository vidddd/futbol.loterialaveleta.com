<?php include('templates/header.php') ?>

<section id="comprar" class="section">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title section__title--centered">Comprar Lotería</h1>
		</header>

		<div class="section__main">
			<div class="buying-grid">
				<form action="" method="GET" class="form form-buy">
					<div class="card">
						<h2 class="form-buy__title">Buscador de décimos</h2>
						<div class="form__item">
							<label for="edit-field-sorteo-target-id" class="form__label">Sorteo</label>
							<input type="text" name="field_sorteo_target_id" id="edit-field-sorteo-target-id">
						</div>

						<div class="form__item">
							<label for="edit-numero" class="form__label">Número</label>
							<input type="number" name="numero" id="edit-numero" min="00000" max="99999">
							<p class="form__message form__message--danger">Debe ser un número de 5 cifras</p>
						</div>

						<div class="form__item">
							<button type="submit" class="btn btn--primary btn--block">Buscar décimo</button>
						</div>
					</div>
				</form>

				<?php for($i=1; $i<=12; $i++): ?>
				<article class="buy">
					<p class="buy__excerpt">
						<span class="buy__item buy__item--date">Sáb. 23/01/2020</span>
						<span class="buy__item buy__item--price">15 EUR</span>
					</p>
					<div class="buy__header">
						<h3 class="buy__item buy__item--number">88888</h3>
						<img src="images/decimo_445x265.png" alt="Décimo nr. 88888" class="buy__image">
					</div>
					
					
					<div class="buy__button">
						<div class="">
							<span class="buy__title">Cant.</span>
							<input type="number" class="buy__quantity" min="0" value="1">
						</div>
						<a href="#" class="btn btn--primary btn--block"><span class="icon-local_grocery_storeshopping_cart"></span></a>
					</div>
					
				</article>
				<?php endfor; ?>

				<p class="added-to-cart">
					El décimo número <strong class="added-to-cart__number">88888</strong> se ha añadido al carrito
				</p>
			</div>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
