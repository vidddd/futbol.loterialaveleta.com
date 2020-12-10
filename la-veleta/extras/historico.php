<?php include('templates/header_logged.php') ?>

<section id="results" class="section results">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title">HISTÓRICO DE RESULTADOS</h1>		
		</header>
		<section class="results-search">
			<form action="#" class="form results-search-form">
				<div class="form__item">
					<label for="game" class="form__label">Juego</label>
					<select name="game" id="game">
						<option value="loteria-nacional">Lotería Nacional</option>
						<option value="euromillones">Euromillones</option>
						<option value="primitiva">La Primitiva</option>
						<option value="bonoloto">Bonoloto</option>
						<option value="gordo">El Gordo de la Primitiva</option>
						<option value="quiniela">Quiniela</option>
						<option value="quinigol">Quinigol</option>
						<option value="lototurf">Lototurf</option>
						<option value="quintuple">Quintuple Plus</option>
					</select>
				</div>
				<div class="form__item">
					<label for="start-date" class="form__label">Fecha inicial</label>
					<input type="date" name="start-date" id="start-date">
				</div>
				<div class="form__item">
					<label for="end-date" class="form__label">Fecha final</label>
					<input type="date" name="end-date" id="end-date">
				</div>
				<div class="form__item">
					<button type="submit" class="btn btn--primary">Buscar</button>
				</div>
			</form>
		</section>

		<div class="section__main">

			<section class="section__subsection">
				<h3 class="results__section__title">Lotería Nacional</h3>
				<div class="results__section__container">	
					<div class="results__section__content">
						<div class="grid grid--3-cols">
							<?php for($i=0;$i<12;$i++): ?>
							<article class="card draw">
								<header class="card__header">
									<h3 class="card__title">
										<img src="images/logos/loteria.svg" alt="Lotería Nacional" class="game__logo">
									</h3>
									<p class="card__date">Martes, 22/12/2019</p>
								</header>
								
								<div class="card__main">
									<ul class="draw__list draw__list--lottery">
										<li class="draw__item draw__item--lottery">
											<span class="draw__text draw__text--lottery">Primer premio</span>
											<span class="draw__number draw__number--lottery">88456</span>
										</li>
										<li class="draw__item draw__item--lottery">
											<span class="draw__text draw__text--lottery">Segundo premio</span>
											<span class="draw__number draw__number--lottery">12345</span>
										</li>
									</ul>
								</div>
								<div class="card__footer">
									<a href="#" class="btn btn--primary card__btn-primary">Jugar ya</a>
									<a href="#results-pop-up" class=" pop-up-trigger card__btn-secondary">Detalle premios</a>
								</div>
							</article>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</section>

		</div>

		<section class="navigation">
			<a href="#" class="nav-page nav-page--first-page"><span class="icon-keyboard_arrow_left"></span><span class="icon-keyboard_arrow_left"></span></a>
			<a href="#" class="nav-page nav-page--prev"><span class="icon-keyboard_arrow_left"></span></a>
			<a href="#" class="nav-page nav-page--current">1</a>
			<a href="#" class="nav-page">2</a>
			<a href="#" class="nav-page nav-page--delimiter">...</a>
			<a href="#" class="nav-page">3</a>
			<a href="#" class="nav-page">4</a>
			<a href="#" class="nav-page nav-page--next"><span class="icon-keyboard_arrow_right"></span></a>
			<a href="#" class="nav-page nav-page--last-page"><span class="icon-keyboard_arrow_right"></span><span class="icon-keyboard_arrow_right"></span></a>
		</section>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('extras/flc.php') ?>
<?php include('templates/footer.php') ?>