<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset(' Template admin/assets/img/logo_.ico') }}' />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    {{-- pendente --}}
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('Template User/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/owr carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/owr carousel/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Template User/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/js/dl-menu/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Template User/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('Template User/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/svg.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/widget.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('Template User/css/swiper/swiper-bunble.min.css') }}">
    

    {{-- @yield('css') --}}
</head>

<body>
    <!--iqoniq Wrapper Start-->
    <div class="iq_wrapper">
        <!--Header Wrap Start-->
        <header class="iq_header_1">
            <div class="container">
                <!--Logo Wrap Start-->
                <div class="iq_logo">

                    <a href="{{ url('/', []) }}"><img src="{{ asset('Template admin/assets/img/logo3.png') }}"
                            alt="Iqoniq Themes"></a>
                </div>
                <!--Logo Wrap Start-->
                <!--Top Strip Wrap Start-->
                <div class="iq_ui_element">
                    <!--Top Strip Wrap Start-->
                    <div class="iq_top_strip">
                        <div class="iq_top_contact pull-left">
                            <a href="#"> Call us : +244 947 986 411</a>
                            <a href="#"> Email : gpaciencia68@gmail.com</a>
                        </div>
                        <div class="iq_time_wrap pull-right"><i class="fa fa-clock-o"></i> Seg - Sáb: 06:00 - 16:00
                            pm </div>
                    </div>
                    <!--Top Strip Wrap End-->
                    <!--Navigation wrap Start-->
                    <div class="navigation-wrapper pull-left ">
                        <div class="navigation pull-left">
                            <ul>
                                <li class="active"><a href="#">Ínicio</a></li>
                                <li><a href="{{ url('sobre') }}">Sobre Nós</a></li>
                                <li><a href="{{ route('todosCursos') }}">Cursos</a>
                                </li>

                                <li><a href="{{ route('blogs.post') }}">Blog</a>
                                </li>
                                <li><a href="#">Eventos</a>
                                    <ul class="children">
                                        <li><a href="event-detail.html">Novos Eventos</a></li>
                                        <li><a href="event-detail.html">Eventos Passados</a></li>
                                        <li><a href="event-calender.html">Calendario de Eventos</a></li>
                                    </ul>
                                </li>

                                <li><a href=" {{ url('equipe', []) }}">Nossa Equipe</a>
                                </li>
                                <li><a href="#">Galeria</a>
                                </li>
                                <li><a href="contact-us.html">Fale Connosco</a></li>
                            </ul>
                        </div>


                        <!--DL Menu Start mobile-->
                        <div id="mg-responsive-navigation" class="dl-menuwrapper">
                            <a href="#" id="toggle-sidebar" class="nav-link nav-link-lg collapse-btn">
                                <button class="dl-trigger">Open Menu</button>
                            </a>

                            <div class="main-sidebar sidebar-style-2" id="sidebar">
                                <aside id="sidebar-wrapper">
                                    <div class="sidebar-brand">
                                        <a href="{{ route('dashboard') }}">
                                            <img alt="image"
                                                src="{{ asset('Template admin/assets/img/logo_.png') }}"
                                                class="header-logo" />
                                            <span class="logo-name">Santa Cruz</span>
                                        </a>
                                    </div>
                                    <ul class="sidebar-menu">
                                        <li class="dropdown active">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Dashboard</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Sobre Nós</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Cursos</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    class="fa fa-blogger    "></i><span>Blog</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="menu-toggle nav-link has-dropdown">
                                                <span>Eventos</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="nav-link"
                                                        href="{{ route('pagamentos.index') }}">Pagamento</a></li>
                                                <li><a class="nav-link"
                                                        href="{{ route('categorias.index') }}">Categoria</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Nossa Equipe</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Galeria</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                                    data-feather="monitor"></i><span>Fale Connosco</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="menu-toggle nav-link has-dropdown">
                                                <span>Area do Administrador</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="nav-link"
                                                        href="{{ route('pagamentos.index') }}">Pagamento</a></li>
                                                <li><a class="nav-link"
                                                        href="{{ route('categorias.index') }}">Categoria</a></li>
                                            </ul>

                                        </li>
                                    </ul>
                                </aside>
                            </div>

                            <script>
                                const toggleButton = document.getElementById('toggle-sidebar');
                                const sidebar = document.getElementById('sidebar');

                                // Abrir/fechar menu ao clicar no botão
                                toggleButton.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    sidebar.classList.toggle('active');
                                });

                                // Fechar o menu ao clicar fora
                                document.addEventListener('click', function(e) {
                                    const isClickInside = sidebar.contains(e.target) || toggleButton.contains(e.target);
                                    if (!isClickInside) {
                                        sidebar.classList.remove('active');
                                    }
                                });

                                // Pega todos os elementos que têm a classe "menu-toggle"
                                const menuToggles = document.querySelectorAll('.menu-toggle');

                                // Itera sobre cada item de menu que tem submenu
                                menuToggles.forEach(function(toggle) {
                                    toggle.addEventListener('click', function(e) {
                                        e.preventDefault();
                                        const dropdownMenu = toggle.nextElementSibling;

                                        // Alterna visibilidade do submenu
                                        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                                            dropdownMenu.style.display = 'block';
                                        } else {
                                            dropdownMenu.style.display = 'none';
                                        }
                                    });
                                });
                            </script>

                            <style>
                                .main-sidebar {
                                    position: fixed;
                                    left: -300px;
                                    /* Escondido inicialmente */
                                    width: 300px;
                                    height: 100%;
                                    transition: left 0.3s ease;
                                }

                                .main-sidebar.active {
                                    left: 0;
                                    /* Aparece ao clicar */
                                }
                            </style>

                        </div>
                        <!--DL Menu END-->
                        <!--Pesquisar Wrap Start-->
                        {{-- <div class="iq_search pull-right">
                            <button data-toggle="modal" data-target="#pesquisar-box"><i
                                    class="fa fa-pesquisar"></i></button>
                        </div> --}}
                        <!--Pesquisar Wrap End-->
                    </div>
                    <!--Navigation wrap End-->
                </div>
                <!--Top Strip Wrap End-->
            </div>
        </header>


        <script src="{{ asset('Template admin/assets/js/app.min.js') }}"></script>
        <script src="{{ asset('Template admin/assets/js/scripts.js') }}"></script>

        <script src="{{ asset('Template User/js/jquery.js') }}"></script>
        <script src="{{ asset('Template User/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Template User/js/slick.min.js') }}"></script>
        <script src="{{ asset('Template User/js/dl-menu/modernizr.custom.js') }}"></script>
        <script src="{{ asset('Template User/js/dl-menu/jquery.dlmenu.js') }}"></script>
        <script src="{{ asset('Template User/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('Template User/js/jquery-filterable.js') }}"></script>
        <script src="{{ asset('Template User/js/waypoints-min.js') }}"></script>
        <!--Custom JavaScript-->

        {{-- é neste script ou arquivo onde esta o problema: custom.js --}}
        <!-- Scripts do Bootstrap 4 -->
        <script src="{{ asset('Template User/js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset('Template User/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Template User/js/popper.min.js') }}"></script>
        <script src="{{ asset('Template User/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Template User/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('Template User/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('Template User/js/custom.js') }}"></script>

        @yield('scripts')
        @yield('conteudo')
        @include('layouts user/footer')
    </div>



</body>
</html>
