<?php include('templates/header.php') ?>

<div class="section section--article">
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
		<div class="grid grid--article">

			<article class="section__main article">
				<header class="article__header">
					<img src="images/articulo-imagen-principal.png" alt="" class="article__postthumbnail">
					<h1 class="article__title">Título principal del artículo</h1>
					<ul class="article__copy">
						<li class="article__author">Daniel Álvarez</li>
						<li class="article__date">Sab. 22/01/2020</li>
					</ul>
					<ul class="article__metadata">
						<li class="article__categories"><span class="icon-folder"></span> <a href="#">Euromillones</a>, <a href="#">Cómo jugar</a></li>
						<li class="article__tags"><span class="icon-bookmarkturned_in"></span> <a href="#">Euromillones</a>, <a href="#">Unidos por un décimo</a></li>
					</ul>
				</header>
				<div class="article__main">
					<!-- Simple texto e imágenes imitando los contenidos de un artículo -->
					<?php include('templates/contenido-articulo.html') ?>
				</div>
				<footer class="article__footer">
					<a href="blog.php" class="btn btn--outline"><span class="icon-arrow_back"></span> Volver al blog</a>
				</footer>			
			</article>
			
			<aside class="section__sidebar sidebar">
							
				<section class="sidebar__section sidebar__banner">
					<a href="comprar.php">
						<picture class="banner banner--sidebar">
							<source media="(max-width: 1023px)" srcset="images/banner_loteria_horizontal.png">
							<source media="(min-width: 1024px)" srcset="images/banner_loteria.jpg">
						  
						 	<img src="images/banner_loteria.jpg" alt="Sorteo de Lotería Nacional" class="banner banner--sidebar">
						</picture>
					</a>
				</section>

				<section class="sidebar__section share">
					<h2 class="sidebar__title"><span class="icon-share"></span> Compartir</h2>
					<ul  class="share__list">
						<li class="share__item"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="share__item"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="share__item"><a href="#"><span class="icon-instagram"></span></a></li>
						<li class="share__item"><a href="#"><span class="icon-whatsapp"></span></a></li>
					</ul>
				</section>
			</aside>
		</div>
	</div>
</div>

<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
