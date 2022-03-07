<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Agregar-Publicaciones</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="{{route('ver.publicaciones')}}" class="logo">Inicio</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class=""><a href="{{route('ver.publicaciones')}}">Temas</a></li>
							<li class="active"><a href="">Registrar</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<section>
							<form method="POST" action="{{route('agregar')}}">
								@csrf
								<div class="fields">
									<div class="field">
										<label for="name">Titulo</label>
										<input type="text" name="titulo"/>
									</div>
									<div class="field">
										<label for="name">Unidad</label>
										<input type="text" name="unidad"/>
									</div>
									<div class="field">
										<label for="name">Slug</label>
										<input type="text" name="slug"/>
									</div>
									<div class="field">
										<label for="message">Contenido</label>
										<textarea name="contenido" rows="4"></textarea>
									</div>
									<div class="field">
										<label for="message">Resumen</label>
										<textarea name="resumen" rows="1"></textarea>
									</div>
									<div class="field">
										<label for="name">Imagen</label>
										<input type="text" name="imagen"/>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Guardar" /></li>
								</ul>
							</form>
						</section>
					</div>

				<!-- Footer -->
					<footer id="footer">
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>