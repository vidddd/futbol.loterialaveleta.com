<?php 

$games = array('loteria','euromillones','primitiva','bonoloto','gordo','quiniela','quinigol','lototurf','quintuple');
$game = filter_input(INPUT_GET, 'game');

if( $game && in_array($game, $games)  ){
	$game = 'subhome-hero--' . $game;
}else{
	$game = 'subhome-hero--loteria';
}



include('templates/header_logged.php');

?>

<!-- 

La imagen de fondo y el color depende de la clase del subhome-hero

subhome-hero--loteria
subhome-hero--quiniela
subhome-hero--quinigol
...

-->
<div class="subhome-hero <?= $game ?>">
	<div class="wrapper">
		<div class="subhome-hero__texts">
			
			<h1 class="subhome-hero__title"><span class="subhome-hero__game game"></span><span class="title-text">Quiniela</span></h1>
			<div class="subhome-hero__buttons">
				<a href="#" class="btn btn--outline subhome-hero__btn">Jugar ya</a>
			</div>
			<div class="subhome-hero__info"><small>Próximo sorteo: 23 / 08 / 2020. Bote de 23 millones</small></div>
		</div>
	</div>
</div>


<section id="results" class="section results">
	<div class="wrapper">
		<header class="section__header">
			<h2 class="section__title">Busca tu sorteo</h2>		
		</header>
		<section class="results-search">
			<form action="#" class="form results-search-form results-search-form--per-game">
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