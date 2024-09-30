<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar"
                    class="nav-link nav-link-lg
                                  collapse-btn"> <i
                        data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Pesquisar"
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
                        </span> <span class="dropdown-item-desc"> <span
                                class="message-user">{{ Auth::user()->name }}</span>
                            <span class="time messege-text">Please check your mail !!</span>
                            <span class="time">2 Min Ago</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="{{ route('mensagens.index') }}">Ver Todas <i class="fas fa-chevron-right"></i></a>
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    {{-- <a href="{{ route('logout') }}" type="submit" class="dropdown-item has-icon text-danger"> <i
                            class="fas fa-sign-out-alt"></i>
                        Sair
                    </a> --}}
                    <button type="submit" class="dropdown-item has-icon text-danger"><i
                            class="fas fa-sign-out-alt"></i> Sair</button>
                </form>
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
            <li><a class="nav-link" href="{{ route('mensagens.index') }}"><i
                        data-feather="mail"></i><span>Mensagens</span></a></li>


            <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Notifications</span></a></li>
            <li class="menu-header">Area de Trabalho</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Area do Formador</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">Turmas</a></li>
                    <li><a class="nav-link" href="{{ route('lista_presencas.index') }}">Lista de Presença</a></li>
                    <li><a class="nav-link" href="blog.html">Registrar Modulos</a></li>
                    <li><a class="nav-link" href="blog.html">Lançar Notas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Area do Formando</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">Turmas</a></li>
                    <li><a class="nav-link" href="{{ route('lista_presencas.index') }}">Lista de Presença</a></li>
                    <li><a class="nav-link" href="blog.html">Certificações</a></li>
                    <li><a class="nav-link" href="blog.html">...</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="grid"></i><span>Area do Administrador</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('pagamentos.index') }}">Pagamento</a></li>
                    <li><a class="nav-link" href="{{ route('categorias.index') }}">Categoria</a></li>
                    <li><a class="nav-link" href="{{ route('lista_presencas.create') }}">Lista de Presença</a></li>
                    <li><a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a></li>
                    <li><a class="nav-link" href="{{ route('modulos.index') }}">Modulos</a></li>
                    <li><a class="nav-link" href="{{ route('departamentos.index') }}">Departamento</a></li>
                    <li><a class="nav-link" href="{{ route('funcionarios.index') }}">Funcionario</a></li>
                    <li><a class="nav-link" href="{{ route('salas.index') }}">Sala</a></li>
                    <li><a class="nav-link" href="{{ route('turmas.index') }}">Turma</a></li>
                    <li><a class="nav-link" href="{{ route('matriculas.create') }}">Matricula</a></li>
                    <li><a class="nav-link" href="{{ route('formandos.index') }}">Formando</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="pie-chart"></i><span>Inscrições</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chart-amchart.html">Inscrever-se</a></li>
                    <li><a class="nav-link" href="chart-apexchart.html">Inscrições Pendentes</a></li>
                    <li><a class="nav-link" href="chart-echart.html">Inscrições Realizadas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Processo
                        de Matricula</span></a>
                <ul class="dropdown-menu">
                    {{-- <li><a type="button" data-toggle="modal" data-target="#exampleModalCenter">Registrar
                            Pagamento</a></li> --}}
                    <li><a class="nav-link" href="{{ route('pagamentos.index') }}">Registrar
                            Pagamento</a></li>
                    <li><a class="nav-link" href="{{ route('matriculas.create') }}">Matricular</a></li>
                </ul>
            </li>

            {{-- <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>

            <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                        Map</span></a></li> --}}
            <li class="menu-header">Páginas</li>
            {{-- <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user-check"></i><span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('users.index') }}">Utilizador</a></li>
                    <li><a href="auth-forgot-password.html">Esqueci a palavra passe</a></li>
                    <li><a href="auth-reset-password.html">Resetar Senha</a></li>
                </ul>
            </li> --}}
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Outras
                        Páginas</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="create-post.html">Certificados</a></li>
                    <li><a class="nav-link" href="posts.html">Anúncios</a></li>
                    <li><a class="nav-link" href="profile.html">Blog</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>


<!-- Modal Vertically Center -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Processo de Pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <center>
                        <form action="{{ route('pagamentos.pesquisar') }}" method="post">
                            @csrf <!-- Token CSRF para proteção -->
                            <label for="cod">Código do Formando</label>
                            <input type="text" class="form-control" name="cod" id="cod"
                                aria-describedby="helpId" placeholder="">
                            <br>
                            <button type="submit" class="btn btn-primary mr-2">Pesquisar</button>
                            <!-- Envia o form ao clicar -->
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
