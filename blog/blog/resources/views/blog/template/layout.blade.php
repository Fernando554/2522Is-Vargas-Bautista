<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Editorial</strong> Chinocorp</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/fernando.vargas.94801/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											@yield('titulo')
										</header>
										<p>Hola soy Fernando Vargas Bautsta Actualmente estoy estudiando una ingenieria en software en la universidad politecnica de tecamac y este es mi primer blog aqui hablare sobre mis gustos, asi como de la opinion que tenga sobre videojuegos, comics o animes para saber mas sobre mi dar click en saber mas</p>
										<ul class="actions">
											<li><a href="{{route('inicio')}}" class="button big">Leer mas: </a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/chino_spider.png" alt="" />
									</span>
								</section>
                                @yield('contenido')
							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('inicio')}}">Homepage</a></li>
										<li><a href="{{route('generic')}}">Videojuegos</a></li>
										<li><a href="{{route('elements')}}">Dragon ball</a></li>
										<li>
											<span class="opener">Series favoritas</span>
											<ul>
												<li><a href="#">The mandalorian</a></li>
												<li><a href="#">Spectacular spiderman</a></li>
												<li><a href="#">Peacemaker</a></li>
												<li><a href="#">Transformers prime</a></li>
											</ul>
										</li>
										<li><a href="#">Figuras favoritas</a></li>
										<li><a href="#">Opinion videojuegos</a></li>
										<li>
											<span class="opener">Peliculas favoritas</span>
											<ul>
												<li><a href="#">El señor de los anillos el retorno del rey</a></li>
												<li><a href="#">Godzilla king of the monsters</a></li>
												<li><a href="#">Dragon ball super broly</a></li>
												<li><a href="#">Tron el legado</a></li>
											</ul>
										</li>
										<li><a href="#">Platillos preferidos</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Familiares</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/mama.png" alt="" /></a>
											<p>Yolanda Bautista Martinez-----Mama-----Ama de casa.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/papa.png" alt="" /></a>
											<p>Fernando Vargas Ponce------Papa-----Contador.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/hermano.png" alt="" /></a>
											<p>Santiago Vargas Bautista-----Hermano-----Estudiante.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Frase favorita</h2>
									</header>
									<p>Los hombres fuertes se cuidan a si mismo. Los mas fuertes protegen a los demas.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">fervar554@gmail.com</a></li>
										<li class="icon solid fa-phone">(52) 1372-4718</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>