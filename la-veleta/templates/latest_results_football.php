<div class="grid grid--lg-align-start">
	<article class="card draw">
		<header class="card__header">
			<h3 class="card__title">
				<img src="images/logos/quiniela.svg" alt="Quiniela" class="game__logo">
			</h3>
			<p class="card__date">Domingo, 20/12/2019</p>
		</header>
		<div class="card__main">
			<table class="draw__table">
				<thead>
					<tr>
						<th>
							<span>Local</span>
							<span>Visitante</span>
						</th>
						<th>Signo</th>
						<th>Res.</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=1; $i<=15; $i++): ?>
						<tr>
							<td>
								<span>Atlético local</span>
								<span>F.C. Visitante</span>
							</td>
							<td>x</td>
							<td>8 - 10</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
		<footer class="card__footer">
			<a href="#" class="btn btn--primary card__btn-primary">Jugar ya</a>
			<a href="#results-pop-up" class="card__btn-secondary pop-up-trigger">Detalle premios</a>
		</footer>
	</article>

	<article class="card draw">
		<header class="card__header">
			<h3 class="card__title">
				<img src="images/logos/quinigol.svg" alt="Quinigol" class="game__logo">
			</h3>
			<p class="card__date">Domingo, 20/12/2019</p>
		</header>
		<div class="card__main">
			<table class="draw__table">
				<thead>
					<tr>
						<th>
							<span>Local</span>
							<span>Visitante</span>
						</th>
						<th>Signo</th>
						<th>Res.</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=1; $i<=6; $i++): ?>
						<tr>
							<td>
								<span>Atlético local</span>
								<span>F.C. Visitante</span>
							</td>
							<td>8 - 10</td>
							<td>8 - 10</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
		<footer class="card__footer">
			<a href="#" class="btn btn--primary card__btn-primary">Jugar ya</a>
			<a href="#results-pop-up" class="card__btn-secondary pop-up-trigger">Detalle premios</a>
		</footer>
	</article>
</div>