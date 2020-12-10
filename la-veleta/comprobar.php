<?php include('templates/header.php') ?>

<section id="comprar" class="section check">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title section__title--centered">Comprobar Lotería Nacional</h1>
		</header>

		<div class="section__main">
			<div class="grid grid--2-cols">
				<form action="" method="GET" class="form form-check">
					<div class="card">
						<div class="form__item">
							<label for="edit-sorteo" class="form__label">Sorteo</label>
							<select name="sorteo" id="edit-sorteo"><option value="" selected="selected">- Seleccionar -</option><option value="493">Sorteo Loteria Nacional  Jueves 02/01/2020</option><option value="473">Sorteo Loteria Nacional  Jueves 26/12/2019</option><option value="457">Sorteo Loteria Nacional  Jueves 19/12/2019</option><option value="434">Sorteo De Lotería Nacional Sábado 14/12/2019</option><option value="432">Sorteo Especial del Niño 06/01/2020</option><option value="431">Sorteo Especial de Navidad 22/12/2019</option><option value="426">Sorteo Del Jueves Jueves 12/12/2019</option><option value="383">Sorteo Especial De La Constitución Sábado 07/12/2019</option><option value="309">Sorteo Loteria Nacional, Jueves 05/12/2019</option><option value="298">Sorteo Loteria Nacional, Sábado 30/11/2019</option><option value="293">Sorteo Loteria Nacional, Jueves 28/11/2019</option><option value="282">Sorteo Loteria Nacional, Sábado 23/11/2019</option><option value="277">Sorteo Loteria Nacional, Jueves 21/11/2019</option><option value="266">Sorteo Loteria Nacional, Sábado 16/11/2019</option><option value="261">Sorteo Loteria Nacional, Jueves 14/11/2019</option><option value="250">Sorteo Loteria Nacional, Sábado 09/11/2019</option><option value="245">Sorteo Loteria Nacional, Jueves 07/11/2019</option><option value="234">Sorteo Loteria Nacional, Sábado 02/11/2019</option><option value="229">Sorteo Loteria Nacional, Jueves 31/10/2019</option><option value="218">Sorteo Loteria Nacional, Sábado 26/10/2019</option><option value="213">Sorteo Loteria Nacional, Jueves 24/10/2019</option><option value="202">Sorteo Loteria Nacional, Sábado 19/10/2019</option><option value="197">Sorteo Loteria Nacional, Jueves 17/10/2019</option><option value="186">Sorteo Loteria Nacional, Sábado 12/10/2019</option><option value="181">Sorteo Loteria Nacional, Jueves 10/10/2019</option><option value="170">Sorteo Loteria Nacional, Sábado 05/10/2019</option><option value="165">Sorteo Loteria Nacional, Jueves 03/10/2019</option><option value="154">Sorteo Loteria Nacional, Sábado 28/09/2019</option><option value="149">Sorteo Loteria Nacional, Jueves 26/09/2019</option><option value="138">Sorteo Loteria Nacional, Sábado 21/09/2019</option><option value="133">Sorteo Loteria Nacional, Jueves 19/09/2019</option><option value="122">Sorteo Loteria Nacional, Sábado 14/09/2019</option><option value="117">Sorteo Loteria Nacional, Jueves 12/09/2019</option></select>
						</div>

						<div class="form__item">
							<label for="edit-decimo" class="form__label">Décimo</label>
							<input type="number" name="numero" id="edit-decimo" min="00000" max="99999">
							<p class="form__message form__message--danger">Debe ser un número de 5 cifras</p>
						</div>
						<div class="form__item">
							<button type="submit" class="btn btn--primary btn--block">Comprobar décimo</button>
						</div>
						<div class="form__item">
							<a href="#">Comprobar otro número</a>
						</div>
					</div>
				</form>
				<div class="check__messages">
					<div class="check-result">
						<img src="images/decimo_220x131.png" alt="Décimo buscado" class="check-result__image">
						<div class="check-result__data">
							<h3 class="check-result__draw">Sorteo Loteria Nacional, Jueves 19/12/2019</h3>
							<p class="check-result__number">Décimo con número: <span class="check-result__number">88888</span></p>
						</div>
						<div class="check__message check__message--success">
							<p><strong>¡Enhorabuena! El décimo ha sido premiado con <span class="check-result__prize">80000</span> euros</strong></p>
						</div>
					</div>
					<div class="check-result">
						<img src="images/decimo_220x131.png" alt="Décimo buscado" class="check-result__image">
						<div class="check-result__data">
							<h3 class="check-result__draw">Sorteo Loteria Nacional, Jueves 19/12/2019</h3>
							<p class="check-result__number">Décimo con número: <span class="check-result__number">88888</span></p>
						</div>
						<div class="check__message check__message--fail">
							<p><strong>¡Lo sentimos! El décimo no ha sido premiado</strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
