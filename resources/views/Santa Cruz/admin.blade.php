{{-- <link rel="stylesheet" href="{{ asset('LearnPress-Education-Courses/assets/css/style.css') }}"> --}}
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout102:13-->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="LearnPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, #, learning," />


    <!-- Page Title -->
    <title>@yield('titulo')</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('LearnPress-Education-Courses/images/logo_.png') }}" rel="shortcut icon" type="image/png">
    {{-- <link rel='shortcut icon' type='image/x-icon' href='{{ asset(' Template admin/assets/img/logo_.ico') }}' /> --}}

    <link href="{{ asset('LearnPress-Education-Courses/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('LearnPress-Education-Courses/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon"
        sizes="72x72">
    <link href="{{ asset('LearnPress-Education-Courses/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon"
        sizes="114x114">
    <link href="{{ asset('LearnPress-Education-Courses/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon"
        sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('LearnPress-Education-Courses/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('LearnPress-Education-Courses/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('LearnPress-Education-Courses/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('LearnPress-Education-Courses/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins"
        href="{{ asset('LearnPress-Education-Courses/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('LearnPress-Education-Courses/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('LearnPress-Education-Courses/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('LearnPress-Education-Courses/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet"
        type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('LearnPress-Education-Courses/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('LearnPress-Education-Courses/js/revolution-slider/css/settings.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('LearnPress-Education-Courses/js/revolution-slider/css/layers.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('LearnPress-Education-Courses/js/revolution-slider/css/navigation.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('LearnPress-Education-Courses/css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet"
        type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('LearnPress-Education-Courses/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('LearnPress-Education-Courses/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('LearnPress-Education-Courses/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('LearnPress-Education-Courses/js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}">
    </script>

    @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="{{ asset('LearnPress-Education-Courses/images/preloaders/5.gif') }}">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Desativar Pré Processamento</div>
        </div>

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-color-2 sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget no-border m-0">
                                <ul class="list-inline">
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a
                                            class="text-white" href="#">+ 244 947 986 411</a> </li>
                                    <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i>
                                        Segunda - Sexta 08:00 até 15:00</li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a
                                            class="text-white" href="#">gpaciencia68@gmail.com</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget no-border m-0">
                                <ul class="list-inline text-right sm-text-center">
                                    <li>
                                        <a href="#" class="text-white">FAQ</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a href="#" class="text-white">Suporte Técnico</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a href="#" class="text-white">Apoio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                                <img src="{{ asset('LearnPress-Education-Courses/images/logo-wide.png') }}"
                                    alt="">
                            </a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="{{route("/")}}">Ínicio</a></li>
                                <li><a href="#">Sobre Nós</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li><a href="{{ route('post_list') }}">Blog</a></li>
                                <li><a href="{{ route('evento_list') }}">Eventos</a></li>
                                <li><a href="#">Nossa Equipa</a></li>
                                <li><a href="#">Galeria</a></li>
                                <li><a href="#">Fale Connosco</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">
            @yield('conteudo')
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer bg-black-222"
            data-bg-img="{{ asset('LearnPress-Education-Courses/images/footer-bg.png') }}">
            <div class="container pt-70 pb-40">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <img class="mt-10 mb-15" alt=""
                                src="{{ asset('LearnPress-Education-Courses/images/logo-wide-white.png') }}">
                            <p class="font-16 mb-10">O Centro de Formação Profissional Santa Cruz oferece cursos e
                                capacitação para diversas áreas, promovendo a qualificação e o desenvolvimento
                                profissional. Conosco, você alcança o próximo nível de sua carreira.</p>
                            <a class="font-14" href="#"><i
                                    class="fa fa-angle-double-right text-theme-colored"></i> Leia mais</a>
                            <ul class="styled-icons icon-dark mt-20">
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s"
                                    data-wow-offset="10">
                                    <a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s"
                                    data-wow-offset="10">
                                    <a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s"
                                    data-wow-offset="10">
                                    <a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s"
                                    data-wow-offset="10">
                                    <a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s"
                                    data-wow-offset="10">
                                    <a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Últimas Notícias</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Novos Cursos
                                                Disponíveis</a></h5>
                                        <p class="post-date mb-0 font-12">14 Out, 2024</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Parceria com Empresas
                                                Locais</a></h5>
                                        <p class="post-date mb-0 font-12">05 Out, 2024</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Eventos de Capacitação</a>
                                        </h5>
                                        <p class="post-date mb-0 font-12">20 Set, 2024</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Links Úteis</h5>
                            <ul class="list angle-double-right list-border">
                                <li><a href="#">Política de Privacidade</a></li>
                                <li><a href="#">Termos de Uso</a></li>
                                <li><a href="#">Declaração de Isenção</a></li>
                                <li><a href="#">Centro de Mídia</a></li>
                                <li><a href="#">Fale Conosco</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Contato Rápido</h5>
                            <ul class="list-border">
                                <li><a href="#">+(244) 947 986 411</a></li>
                                <li><a href="mailto:info@cfpsantacruz.com">info@cfpsantacruz.com</a></li>
                                <li><a href="#" class="lineheight-20">Bairro Dunga, Próximo a Praça, Junto as
                                        Caritas, Angola - Uige</a></li>
                            </ul>
                            <p class="font-16 text-white mb-5 mt-15">Inscreva-se na nossa newsletter</p>
                            <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                                <label class="display-block" for="mce-EMAIL"></label>
                                <div class="input-group">
                                    <input type="email" value="" name="EMAIL" placeholder="Seu Email"
                                        class="form-control" data-height="37px" id="mce-EMAIL">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-colored btn-theme-colored m-0">
                                            <i class="fa fa-paper-plane-o text-white"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black-333">
                <div class="container pt-20 pb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-11 text-black-777 m-0">© 2024 Centro de Formação Profissional Santa Cruz.
                                Todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li><a href="#">Perguntas Frequentes</a></li>
                                    <li>|</li>
                                    <li><a href="#">Suporte</a></li>
                                    <li>|</li>
                                    <li><a href="#">Ajuda Online</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset('LearnPress-Education-Courses/js/custom.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
          (Load Extensions only on Local File Systems !
           The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('LearnPress-Education-Courses/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    @yield('script')
</body>

<!-- index-mp-layout108:42-->

</html>
