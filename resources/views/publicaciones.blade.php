<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Inicio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">

        <!-- Intro -->
        <div id="intro">
            <h1>Examen</h1>
            <p>By Alfonso Fabrice<br />
                and Marco Antonio</p>
            <ul class="actions">
                <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
            </ul>
        </div>

        <!-- Header -->
        <header id="header">
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li class="active"><a href="">Temas</a></li>
                <li class="registrar"><a href="{{route('agregar.vista')}}">Agregar Publicacion</a></li>
            </ul>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <!-- Featured Post -->
            <article class="post featured">
                <header class="major">
                    <span class="date">{{$publicaciones[0]->created_at}}</span>
                    <h2><a href="#">{{$publicaciones[0]->titulo}}</a></h2>
                    <p>{{$publicaciones[0]->resumen}}</p>
                </header>
                <a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
                <ul class="actions special">
                    <li><a href="#" class="button large">Abrir</a></li>
                </ul>
            </article>

            <!-- Posts -->
            <section class="posts">
                
                @foreach ($publicaciones as $publicacion)
                <article>
                    <header>
                        <span class="date">{{$publicacion->created_at}}</span>
                        <h2><a href="#">{{$publicacion->titulo}}</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                    <p>{{$publicacion->resumen}}</p>
                    <ul class="actions special">
                        <li><a href="{{route('ver.publicacion', $publicacion->slug)}}" class="button" target="_blank">Abrir</a></li>
                    </ul>
                </article>
                @endforeach
            </section>

        </div>

        <!-- Footer -->
        <footer id="footer">
        </footer>

        <!-- Copyright -->
        <div id="copyright">
            <ul>
                <li>&copy; Untitled</li>
                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
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