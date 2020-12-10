<section id="results" class="section results">
	<div class="wrapper">
		<header class="section__header results__header">
			<h1 class="section__title">
				RESULTADOS
				<span>LOTERIA NACIONAL, EUROMILLONES, PRIMITIVA, EL GORDO DE LA PRIMITIVA, BONOLOTO, QUINIELA, QUINIGOL, LOTOTURF</span>
			</h1>
			<div class="history-btn-container">
				<a href="historico.php" class="btn btn--outline history__btn">
					Consulte el histórico de resultados
					<span class="icon-keyboard_arrow_right"></span>
				</a>
			</div>			
		</header>

		<div class="section__main">

			<section class="section__subsection">
				<h3 class="results__section__title">Loterías</h3>
				<div class="results__section__container">	
					<div class="results__section__content">
					<?php include('latest_results_lottery.php') ?>
					</div>
				</div>
			</section>
			<section class="section__subsection">
				<h3 class="results__section__title">Quinielas</h3>
				<div class="results__section__container">	
					<div class="results__section__content">
					<?php include('latest_results_football.php') ?>
					</div>
				</div>
			</section>
			<section class="section__subsection">
				<h3 class="results__section__title">Hípica</h3>
				<div class="results__section__container">	
					<div class="results__section__content">
					<?php include('latest_results_turf.php') ?>
					</div>
				</div>
			</section>
		</div>
		
	</div>

	<aside id="results-pop-up" class="pop-up">
		<div class="pop-up__wrapper">
			<div class="pop-up__content">
				<article class="card">
					<header class="card__header"></header>
					<div class="card__main">						
						<!-- Sustituir tabla por el detalle de premios -->
						<table class="table">
						  <thead>
						    <tr>
						      <th>Categoria</th>
						      <th>Premio</th>
						      <th>Ganadores</th>
						      <th>Ganadores EU</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						          <td>1ª       5      +      2</td>
						          <td><strong>0</strong></td>
						          <td>0</td>
						          <td>0</td>
						    </tr>
						    <tr>
						          <td>2ª       5      +      1</td>
						          <td><strong>472,957</strong></td>
						          <td>0</td>
						          <td>2</td>
						    </tr>
						    <tr>
						          <td>3ª       5      +      0</td>
						          <td><strong>12,959</strong></td>
						          <td>5</td>
						          <td>17</td>
						    </tr>
						    <tr>
						          <td>4ª       4      +      2</td>
						          <td><strong>3,848</strong></td>
						          <td>3</td>
						          <td>28</td>
						    </tr>
						    <tr>
						          <td>5ª       4      +      1</td>
						          <td><strong>170</strong></td>
						          <td>147</td>
						          <td>673</td>
						    </tr>
						    <tr>
						          <td>6ª       3      +      2</td>
						          <td><strong>118</strong></td>
						          <td>296</td>
						          <td>1,359</td>
						    </tr>
						    <tr>
						          <td>7ª       4      +      0</td>
						          <td><strong>61</strong></td>
						          <td>309</td>
						          <td>1,479</td>
						    </tr>
						    <tr>
						          <td>8ª       2      +      2</td>
						          <td><strong>20</strong></td>
						          <td>4,260</td>
						          <td>19,964</td>
						    </tr>
						    <tr>
						          <td>9ª       3      +      1</td>
						          <td><strong>14</strong></td>
						          <td>5,756</td>
						          <td>29,548</td>
						      </tr>
						    <tr>
						          <td>10ª       3      +      0</td>
						          <td><strong>11</strong></td>
						          <td>14,887</td>
						          <td>73,786</td>
						    </tr>
						    <tr>
						          <td>11ª       1      +      2</td>
						          <td><strong>11</strong></td>
						          <td>22,467</td>
						          <td>103,598</td>
						    </tr>
						    <tr>
						          <td>12ª       2      +      1</td>
						          <td><strong>8</strong></td>
						          <td>86,072</td>
						          <td>431,059</td>
						      </tr>
						    <tr>
								<td>13ª       2      +      0</td>
								<td><strong>4</strong></td>
								<td>212,937</td>
								<td>1,059,296</td>
						    </tr>
						    </tbody>
						</table>
					</div>
				</article>
			</div>
			<a href="#results-pop-up" class="pop-up__btn-close"><span class="icon-clearclose"></span></a>
		</div>
	</aside>
</section>