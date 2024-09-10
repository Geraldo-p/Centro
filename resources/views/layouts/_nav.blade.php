<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i
                        data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search"
                            data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                <span class="badge headerBadge1">
                    1 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Mensagens
                    <div class="float-right">
                        <a href="#">Marcar Todas Como Lida</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white">
                            <img alt="image" src="{{ asset('Template admin/assets/img/users/user-1.png') }}"
                                class="rounded-circle">
                        </span> <span class="dropdown-item-desc"> <span class="message-user">Geraldo</span>
                            <span class="time messege-text">Please check your mail !!</span>
                            <span class="time">2 Min Ago</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">Ver Todas <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Notifications
                    <div class="float-right">
                        <a href="#">Marcar Todas Como Lidas</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">

                    <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span> <span class="dropdown-item-desc"> Low disk space. Let's
                            clean it! <span class="time">17 Hours Ago</span>
                        </span>
                    </a>
                    <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white">
                            <i class="fas
												fa-bell"></i>
                        </span> <span class="dropdown-item-desc"> Bem Vindo a Santa Cruz<span class="time">Hoje</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                    src="{{ asset('Template admin/assets/img/user.png') }}" class="user-img-radious-style"> <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Olá {{ Auth::user()->name }}</div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon"> <i
                        class="far
										fa-user"></i> Perfil
                </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                    Actividades
                </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                    Definições
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"> <i
                        class="fas fa-sign-out-alt"></i>
                    Sair
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <img alt="image"
                    src="{{ asset('Template admin/assets/img/logo_.png') }}" class="header-logo" /> <span
                    class="logo-name">Santa Cruz</span>
            </a>

        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href= "{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Widgets</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                    <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Apps</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">Chat</a></li>
                    <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
            <li class="menu-header">Otika</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="grid"></i><span>Tabelas</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('categorias.index') }}">Categoria</a></li>
                    <li><a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a></li>
                    <li><a class="nav-link" href="{{ route('modulos.index') }}">Modulos</a></li>
                    <li><a class="nav-link" href="{{ route('departamentos.index') }}">Departamento</a></li>
                    <li><a class="nav-link" href="{{ route('funcionarios.index') }}">Funcionario</a></li>
                    <li><a class="nav-link" href="{{ route('salas.index') }}">Sala</a></li>
                    <li><a class="nav-link" href="{{ route('turmas.index') }}">Turma</a></li>
                    <li><a class="nav-link" href="{{ route('turma_formandos.create') }}">Add Formando na Turma</a></li>
                    <li><a class="nav-link" href="{{ route('formandos.index') }}">Formando</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="pie-chart"></i><span>Charts</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                    <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                    <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                    <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                    <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                    <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="flag"></i><span>Sliders</span></a>
                <ul class="dropdown-menu">
                    <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                    <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>

            <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                        Map</span></a></li>
            <li class="menu-header">Páginas</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user-check"></i><span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                    <li><a href="auth-reset-password.html">Reset Password</a></li>
                    <li><a href="subscribe.html">Subscribe</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Outras
                        Páginas</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="create-post.html">Criar Postagem</a></li>
                    <li><a class="nav-link" href="posts.html">Posts</a></li>
                    <li><a class="nav-link" href="profile.html">Profile</a></li>
                    <li><a class="nav-link" href="contact.html">Contact</a></li>
                    <li><a class="nav-link" href="invoice.html">Invoice</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
