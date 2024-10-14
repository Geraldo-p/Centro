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
    <link href="{{ asset('LearnPress-Education-Courses/images/favicon.png') }}" rel="shortcut icon" type="image/png">
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
                                        Segunda - Sexta 08:00 até 15:00, Sábado 08:00 até 12:00 </li>
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
                                <li class="active"><a href="#home">Ínicio</a>
                                    <ul class="dropdown">
                                        {{-- <li><a href="#">Home Variations <span
                                                    class="label label-info">New</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Rev Slider</a>
                                                    <ul class="dropdown">
                                                        <li><a
                                                                href="index-home-variation-revslider-style1.html">Layout1</a>
                                                        </li>
                                                        <li><a
                                                                href="index-home-variation-revslider-style2.html">Layout2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Maximage Slider</a>
                                                    <ul class="dropdown">
                                                        <li><a
                                                                href="index-home-variation-maximageslider-style1.html">Layout1</a>
                                                        </li>
                                                        <li><a
                                                                href="index-home-variation-maximageslider-style2.html">Layout2</a>
                                                        </li>
                                                        <li><a
                                                                href="index-home-variation-maximageslider-style3.html">Layout3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a>
                                                </li>
                                                <li><a href="index-home-variation-typed-text.html">Typed Text
                                                        Layout</a></li>
                                                <li><a href="index-home-variation-video-background.html">Youtube
                                                        Background Video</a></li>
                                                <li><a href="index-home-variation-html5-video.html">Html5 Background
                                                        Video</a></li>
                                                <li><a href="index-home-variation-bg-image-parallax.html">Bg Image
                                                        Parallax Layout</a></li>
                                                <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a>
                                                </li>
                                                <li><a href="#">Home Appointment Form</a>
                                                    <ul class="dropdown">
                                                        <li><a
                                                                href="index-home-variation-appointment-form-style1.html">Layout1</a>
                                                        </li>
                                                        <li><a
                                                                href="index-home-variation-appointment-form-style2.html">Layout2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li><a href="#">Sobre Nós</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Eventos</a></li>
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
            {{-- @yield('conteudo') --}}
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
                            <p class="font-16 mb-10">GreenPeace is a library of Crowdfunding and Charity templates with
                                predefined elements which helps you to build your own site. Lorem ipsum dolor sit amet
                                consectetur.</p>
                            <a class="font-14" href="#"><i
                                    class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                            <ul class="styled-icons icon-dark mt-20">
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s"
                                    data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s"
                                    data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s"
                                    data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i
                                            class="fa fa-skype"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s"
                                    data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s"
                                    data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i
                                            class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable
                                                Construction</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a>
                                        </h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Storefront
                                                Installations</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt=""
                                            src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a>
                                        </h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Useful Links</h5>
                            <ul class="list angle-double-right list-border">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Donor Privacy Policy</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Media Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Quick Contact</h5>
                            <ul class="list-border">
                                <li><a href="#">+(012) 345 6789</a></li>
                                <li><a href="#">hello@yourdomain.com</a></li>
                                <li><a href="#" class="lineheight-20">121 King Street, Melbourne Victoria 3000,
                                        Australia</a></li>
                            </ul>
                            <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
                            <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                                <label class="display-block" for="mce-EMAIL"></label>
                                <div class="input-group">
                                    <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                        class="form-control" data-height="37px" id="mce-EMAIL">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i
                                                class="fa fa-paper-plane-o text-white"></i></button>
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
                            <p class="font-11 text-black-777 m-0"><a target="_blank"
                                    href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Help Desk</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
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
</body>

<!-- index-mp-layout108:42-->

</html>
