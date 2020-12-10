<div class="grid grid--2-cols grid--lg-align-start">
	<article class="card draw">
		<header class="card__header">
			<h3 class="card__title">
				<img src="images/logos/lototurf.svg" alt="Lototurf" class="game__logo">
			</h3>
			<p class="card__date">Domingo, 22/12/2019</p>
		</header>
		<div class="card__main">
			<ul class="draw__list">
				<li class="draw__item">
					<span class="draw__number">01</span>
				</li>
				<li class="draw__item">
					<span class="draw__number">11</span>
				</li>
				<li class="draw__item">
					<span class="draw__number">28</span>
				</li>
				<li class="draw__item">
					<span class="draw__number">37</span>
				</li>
				<li class="draw__item">
					<span class="draw__number">38</span>
				</li>
				<li class="draw__item">
					<span class="draw__number">48</span>
				</li>
				<li class="draw__item--break"></li>
				<li class="draw__item">
					<span class="draw__number draw__number--secondary">08</span>
					<span class="draw__text">Cab.</span>
				</li>
				<li class="draw__item">
					<span class="draw__number draw__number--secondary">06</span>
					<span class="draw__text">R.</span>
				</li>
			</ul>
		</div>
		<footer class="card__footer">
			<a href="#" class="btn btn--primary card__btn-primary">Jugar ya</a>
			<a href="#results-pop-up" class=" pop-up-trigger card__btn-secondary">Detalle premios</a>
		</footer>
	</article>

	<article class="card draw">
		<header class="card__header">
			<h3 class="card__title">
				<img src="images/logos/quintuple.svg" alt="Quintuple Plus" class="game__logo">
			</h3>
			<p class="card__date">Domingo, 20/12/2019</p>
		</header>
		<div class="card__main">
			<table class="draw__table">
				<thead>
					<tr>
						<th>
							<span>Carrera</span>
						</th>
						<th>Ganador</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=1; $i<=6; $i++): ?>
						<tr>
							<td>
								<span>Carrera <?= $i ?></span>
							</td>
							<td>4</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
		<footer class="card__footer">
			<a href="#" class="btn btn--primary card__btn-primary">Jugar ya</a>
			<a href="#results-pop-up" class=" pop-up-trigger card__btn-secondary">Detalle premios</a>
		</footer>
	</article>
</div>