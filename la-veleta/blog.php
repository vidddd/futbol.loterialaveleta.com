<?php include('templates/header.php') ?>

<div class="section">
	<nav class="full-size blog-bar">
		<div class="wrapper">
			<a href="#blog-bar__blog-categories" class="blog-bar__link"><span class="icon-folder_open"></span> Categorías</a>
			<a href="#blog-bar__form-search" class="blog-bar__link"><span class="icon-search"></span> Buscador</a>		
		</div>
	</nav>
	<div id="blog-bar__blog-categories" class="blog-bar__dropdown">
		<div class="wrapper">
			<div class="blog-bar__dropdown-container">
				<a href="#blog-bar__blog-categories" class="dropdown__btn-close"><span class="icon-clearclose"></span></a>
			</div>
			<section class="blog-categories">
				<ul class="blog-categories__list">
					<li class="blog-categories__item"><a href="#">Lotería Nacional</a></li>
					<li class="blog-categories__item"><a href="#">Lotería de Navidad</a></li>
					<li class="blog-categories__item"><a href="#">Primitiva</a></li>
					<li class="blog-categories__item"><a href="#">Euromillones</a></li>
					<li class="blog-categories__item"><a href="#">Bonoloto</a></li>
					<li class="blog-categories__item"><a href="#">Quiniela</a></li>
					<li class="blog-categories__item"><a href="#">Quinigol</a></li>
				</ul>
			</section>
		</div>
	</div>
	<div id="blog-bar__form-search" class="blog-bar__dropdown">
		<div class="wrapper">
			<div class="blog-bar__dropdown-container">
				<a href="#blog-bar__form-search" class="dropdown__btn-close"><span class="icon-clearclose"></span></a>
			</div>
			<form action="#" class="form-search">
				<input type="text" name="busqueda" placeholder="Introduzca su busqueda">
				<button type="submit" class="btn btn--primary"><span class="icon-search"></span></button>
			</form>
		</div>
	</div>

	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title section__title--centered">El Blog de Lotería La Veleta</h1>	
		</header>
		<div class="grid grid--3-cols">
			<?php for($i=1;$i<=6;$i++): ?>
			<article class="blog-article">
				<a href="articulo-blog.php" class="blog-article__wrapper">
					<h2 class="blog-article__title">Título de un artículo</h2>
					<ul class="blog-article__copy">
						<li class="blog-article__author">Daniel Álvarez</li>
						<li class="blog-article__date">Sab. 22/01/2020</li>
					</ul>
					<p class="blog-article__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate nihil fugit aperiam, deserunt facere sunt quod consequuntur soluta saepe ducimus id voluptates hic sint, iure unde qui, incidunt dolore reprehenderit!</p>
					<div class="blog-article__fake-link">
						<span class="btn btn--primary">Leer más</span>
					</div>
					<img src="images/articulo-imagen-principal.png" alt="" class="blog-article__image">
				</a>
			</article>

			<article class="blog-article">
				<a href="articulo-blog.php" class="blog-article__wrapper">
					<h2 class="blog-article__title">Título de un artículo que dobla línea en pantalla normal</h2>
					<ul class="blog-article__copy">
						<li class="blog-article__author">Daniel Álvarez</li>
						<li class="blog-article__date">Sab. 22/01/2020</li>
					</ul>
					<p class="blog-article__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate nihil fugit aperiam, deserunt facere sunt quod consequuntur soluta saepe ducimus id voluptates hic sint, iure unde qui, incidunt dolore reprehenderit!</p>
					<div class="blog-article__fake-link">
						<span class="btn btn--primary">Leer más</span>
					</div>
					<img src="images/articulo-imagen-principal-2.png" alt="" class="blog-article__image">
				</a>
			</article>
			<?php endfor; ?>
		</div>
		<div class="pagination">
			<a href="#" class="btn btn--outline pagination__link"><span class="icon-arrow_back"></span> <span>Últimas noticias</span></a>
			<a href="#" class="btn btn--outline pagination__link"><span>Otras noticias</span> <span class="icon-arrow_forward"></span></a>
		</div>
	</div>
</div>

<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
