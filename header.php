<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site, Base">
    <title>Site Base</title>
    <link rel="apple-touch-icon" sizes="57x57" href="imgs/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imgs/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imgs/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imgs/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imgs/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imgs/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imgs/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imgs/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="imgs/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imgs/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imgs/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="libs/bootstrap-5.0.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libs/fancybox-3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="libs/swiper-6.6.2/swiper-bundle.min.css">
    <link rel="preload prefetch" href="fonts/roboto-regular-webfont.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload prefetch" href="fonts/roboto-regular-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload prefetch" href="fonts/roboto-bold-webfont.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload prefetch" href="fonts/roboto-bold-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <header id="header">
        <button class="skip-link fixed-top" id="skipForContent" onClick="skipLinkMain()">Pular para o conteúdo principal</button>
        <nav class="navbar navbar-expand compensate-for-scrollbar">
            <div class="container">
                <a href="index.php" class="logo">
                    <img srcset="imgs/logo.png, imgs/logo-2x.png 2x" src="imgs/logo-2x.png" alt="Site Base" />
                </a>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="single.php">Blog Interna</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outros <i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="modal.php">Modal</a></li>
                            <li><a href="newsletter.php">Newsletter</a></li>
                            <li><a href="#k13" class="scrollTo">Scroll to Div</a></li>
                            <li><a href="instagram.php">Instagram (Instafeed)</a></li>
                            <li><a href="gradient.php">Gradiente</a></li>
                            <li><a href="background.php">Background</a></li>
                            <li><a href="video.php">Vídeo</a></li>
                            <li><a href="sliders-galleries.php">Galeria de Sliders</a></li>
                        </ul>
                    </li>
                    <li><a href="banner-parallax.php">Banner Parallax</a></li>
                    <li><a href="page.php">Page Padrão</a></li>
                    <li><a href="partners.php">Parceiros</a></li>
                    <li><a href="contact.php">Contato</a></li>
                    <li>
                        <form action="search.php" class="search-bar" role="search">
                            <input type="search" id="search-input" name="search" pattern=".*\S.*" required aria-label="Pesquisar">
                            <button id="search-btn" type="submit" aria-label="Buscar">
                                <i class="fas fa-search"></i>
                            </button>
                            <script>
                                let input = document.querySelector('#search-input');
                                input.addEventListener('invalid', function(e) {
                                    e.preventDefault();
                                    input.focus();
                                }, true);
                            </script>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="wrapper">
        <div id="overlay"></div>
        <div id="mobile-fas">
            <div class="overlay">
                <i class="close-menu-mobile fas fa-times"></i>
            </div>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-nav" id="submenu-mobile">
                <li><a href="banner-parallax.php">Banner Parallax</a></li>
                <li><a href="page.php">Page Padrão</a></li>
                <li><a href="partners.php">Parceiros</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li>
                    <a href="#sub-1" data-bs-toggle="collapse" data-target="#sub-1" class="btn-collapse collapsed">Todas as Categorias <i class="caret fas fa-angle-up"></i></a>
                    <div class="collapse" id="sub-1">
                        <div class="sub-menu">
                            <a href="modal.php">Modal</a>
                            <a href="newsletter.php">Newsletter</a>
                            <a href="#k13" class="scrollTo">Scroll to Div</a>
                            <a href="instagram.php">Instagram (Instafeed)</a>
                            <a href="gradient.php">Gradiente</a>
                            <a href="background.php">Background</a>
                            <a href="video.php">Vídeo</a>
                            <a href="sliders-galleries.php">Galeria de Sliders</a>
                            <a href="single-slider-gallery.php">Slider de Galeria</a>
                        </div>
                    </div>
                </li>
                <li class="social">
                    <a href="https://facebook.com/" title="Facebook" target="_blank" rel="noreferrer"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com" title="Twitter" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div id="mobile-fixed">
            <div class="search-mobile">
                <form action="search.php" method="GET">
                    <input type="text" name="search" id="search-input" autocomplete="off" placeholder="Digite aqui o que você procura" />
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div id="mobile-bar">
                <div class="container">
                    <ul>
                        <li>
                            <a href="index.php">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="menu-toggle">
                                <i class="fas fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <i class="fas fa-phone"></i>
                                <span>Contato</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="search-btn">
                                <i class="fas fa-search"></i>
                                <i class="fas fa-times d-none"></i>
                                <span>Pesquisar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>