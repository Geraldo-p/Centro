@extends('layouts user.admin')
@section('titulo', 'ínicio')
@section('conteudo')
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- carousel --}}
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href=""></a> <img src="{{ asset('Template User/extra-images/banner-01.jpg') }}"
                    class="d-block w-100" alt="Imagem 1">
                <div class="iq-caption-wrapper text-left">
                    <div class="iq_banner_caption container">
                        <div class="iq-caption">
                            <div class="iq-caption-title">Centro de Formação Profissional - Santa Cruz</div>
                            <div class="iq-caption-text">Construa seu futuro!</div>
                            <div class="iq-caption-contant">Oferecemos cursos que preparam você para o mercado de
                                trabalho.
                            </div>
                            @auth
                                <a href="{{ route('dashboard') }}">
                                    <div class="iq_link_1">Dashboard</div>
                                </a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}">
                                    <div class="iq_link_1">Entrar</div>
                                </a>
                                <a href="{{ route('register') }}">
                                    <div class="iq_link_1">Inscrever-se</div>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Template User/extra-images/banner-02.jpg') }}" class="d-block w-100" alt="Imagem 2">
                <div class="iq-caption-wrapper text-center">
                    <div class="iq_banner_caption container">
                        <div class="iq-caption">
                            <div class="iq-caption-title">Centro de Formação Profissional - Santa Cruz</div>
                            <div class="iq-caption-text">Aprendizado prático!</div>
                            <div class="iq-caption-contant">Experimente cursos dinâmicos com instrutores
                                qualificados e laboratórios bem equipados.
                            </div>
                            @auth
                                <a href="{{ route('dashboard') }}">
                                    <div class="iq_link_1">Dashboard</div>
                                </a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}">
                                    <div class="iq_link_1">Entrar</div>
                                </a>
                                <a href="{{ route('register') }}">
                                    <div class="iq_link_1">Inscrever-se</div>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Template User/extra-images/banner-03.jpg') }}" class="d-block w-100" alt="Imagem 3">
                <div class="iq-caption-wrapper text-right">
                    <div class="iq_banner_caption container">
                        <div class="iq-caption">
                            <div class="iq-caption-title">Centro de Formação Profissional - Santa Cruz</div>
                            <div class="iq-caption-text">Apoio ao Formando!</div>
                            <div class="iq-caption-contant">Oferecemos orientação profissional, workshops e
                                oportunidades de networking para garantir que você alcance seus objetivos
                            </div>
                            @auth
                                <a href="{{ route('dashboard') }}">
                                    <div class="iq_link_1">Dashboard</div>
                                </a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}">
                                    <div class="iq_link_1">Entrar</div>
                                </a>
                                <a href="{{ route('register') }}">
                                    <div class="iq_link_1">Inscrever-se</div>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- carouse end --}}

    <!--Iqoniq Content Start-->
    <div class="iq_content_wrap">
        <!--We Are Professional Wrap Start-->
        <div class="we_professional_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <section>
                            <!-- Heading Wrap Start -->
                            <div class="iq_heading_1 text-left">
                                <h4>Nós Somos <span>Profissionais</span></h4>
                                <p>Descubra nossas categorias de formação, onde cada uma é projetada para
                                    desenvolver habilidades essenciais para o mercado de trabalho e transformar sua
                                    carreira!</p>
                            </div>
                            <!-- Heading Wrap End -->
                            <div class="row">
                                <!-- Categoria: Tecnologia -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq_professional_services">
                                        <span class="icon-technology">
                                            <i class="fas fa-laptop-code"></i>
                                        </span>
                                        <h5><a href="#">Tecnologia</a></h5>
                                        <p>Na era digital, as habilidades tecnológicas são mais importantes do que
                                            nunca. Nossos cursos de Tecnologia oferecem uma profunda imersão em
                                            programação, desenvolvimento web, e mais. Venha se preparar para o
                                            futuro e se tornar um profissional requisitado no mercado, aprendendo
                                            com instrutores experientes e projetos práticos!</p>
                                    </div>
                                </div>
                                <!-- Categoria: Culinária -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq_professional_services">
                                        <span class="icon-culinary">
                                            <i class="fas fa-utensils"></i>
                                        </span>
                                        <h5><a href="#">Culinária</a></h5>
                                        <p>Transforme sua paixão por cozinhar em uma carreira! Em nosso curso de
                                            Culinária, você irá explorar técnicas culinárias diversas, desde a
                                            gastronomia clássica até a confeitaria moderna. Aprenda a criar pratos
                                            incríveis e impressionar seus amigos e familiares, enquanto se prepara
                                            para um mercado de trabalho vibrante e cheio de oportunidades!</p>
                                    </div>
                                </div>
                                <!-- Categoria: Inteligência Artificial -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq_professional_services">
                                        <span class="icon-ai">
                                            <i class="fas fa-robot"></i>
                                        </span>
                                        <h5><a href="#">Inteligência Artificial</a></h5>
                                        <p>A inteligência artificial está moldando o futuro! Em nossos cursos, você
                                            aprenderá sobre algoritmos, machine learning, e suas aplicações no mundo
                                            real. Venha entender como a IA está transformando negócios e otimizando
                                            processos, e posicione-se na vanguarda dessa revolução tecnológica com
                                            um conhecimento prático e teórico!</p>
                                    </div>
                                </div>
                                <!-- Categoria: Decoração -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq_professional_services">
                                        <span class="icon-decoration">
                                            <i class="fas fa-paint-roller"></i>
                                        </span>
                                        <h5><a href="#">Decoração</a></h5>
                                        <p>Desperte sua criatividade e crie ambientes inspiradores! Nosso curso de
                                            Decoração oferece uma abordagem abrangente ao design de interiores,
                                            incluindo teoria das cores, escolha de móveis e técnicas de arranjo.
                                            Aprenda a transformar espaços comuns em verdadeiras obras de arte, e
                                            abra as portas para uma carreira repleta de estilo e inovação!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Professional Services Wrap End -->
                        </section>

                    </div>
                    <!--Pesquisar Wrap Start-->
                    <div class="col-md-4">
                        <div class="iq_search_courses">
                            <h4>Pesquisar Courses</h4>
                            <form>
                                <!--Input Start-->
                                <div class="iq-input">
                                    <input type="text" placeholder="Name">
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <input type="email" placeholder="E-mail">
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <input type="text" placeholder="Name">
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <select name="Dicipline">
                                        <option value="0">Dicipline</option>
                                        <option value="9">Saab</option>
                                        <option value="2">Fiat</option>
                                        <option value="3">Audi</option>
                                    </select>
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <select name="Course_Length">
                                        <option value="0">Course Length</option>
                                        <option value="9">Saab</option>
                                        <option value="2">Fiat</option>
                                        <option value="3">Audi</option>
                                    </select>
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <select name="Study_Level">
                                        <option value="0">Study Level</option>
                                        <option value="9">Saab</option>
                                        <option value="2">Fiat</option>
                                        <option value="3">Audi</option>
                                    </select>
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <select name="Campus_Location">
                                        <option value="0">Campus Location</option>
                                        <option value="9">Saab</option>
                                        <option value="2">Fiat</option>
                                        <option value="3">Audi</option>
                                    </select>
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <input type="text" placeholder="Key Words">
                                </div>
                                <!--Input End-->
                                <!--Input Start-->
                                <div class="iq-input">
                                    <input class="iq_link_1" type="submit" value="Pesquisar">
                                </div>
                                <!--Input End-->
                            </form>
                        </div>
                    </div>
                    <!--Pesquisar Wrap End-->
                </div>
            </div>
        </div>
        <!--We Are Professional Wrap End-->
        <!--Get Best Knowledge Wrap Start-->
        <section class="iq_best_knowledge_bg">
            <!--Best Knowledge Description Wrap Start-->
            <div class="col-md-6 col-sm-offset-6 col-md-offset-6">
                <div class="iq_knowledge_des">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-left">
                        <h4>Obtenha o <span>Melhor Conhecimento</span><br>Conosco</h4>
                    </div>
                    <!--Heading Wrap End-->
                    <h5>Tenha a Coragem de Acreditar no Seu Potencial</h5>
                    <p>No Centro de Formação Profissional Santa Cruz, oferecemos mais que conhecimento:
                        proporcionamos experiências práticas que transformam sua carreira. Deixe para trás as
                        dúvidas e abrace as oportunidades de crescimento que nossos cursos oferecem.</p>
                    <a class="iq_link_1" href="{{ route('register') }}">Junte-se a Nós</a>
                </div>
            </div>
            <!--Best Knowledge Description Wrap End-->
        </section>

        <!--Get Best Knowledge Wrap End-->
        <!--Our Featured Courses Wrap Start-->
        <section>
            <div class="container">
                <!--Heading Wrap Start-->
                <div class="iq_heading_1 text-center">
                    <h4>Nossos <span>Cursos em Destaque</span></h4>
                    <p>Explore nossa ampla variedade de cursos, cuidadosamente desenhados para capacitar você nas
                        áreas mais procuradas pelo mercado. <br>Seja para aprimorar suas habilidades ou iniciar uma
                        nova carreira, aqui você encontra o curso perfeito.</p>
                </div>
                <center>
                    <div class="iq_tab_menu">
                        <ul class="nav nav-pills text-center" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3"
                                    role="tab" aria-controls="home3" aria-selected="true">Destaque</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                    aria-controls="profile3" aria-selected="false">Promoçao</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                    aria-controls="contact3" aria-selected="false">Popular</a>
                            </li>
                        </ul>
                    </div>
                </center>
                <div class="tab-content" id="myTabContent2">
                    <!-- Tab-pane Home -->
                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="">
                            @forelse ($cursos as $item)
                                <div class="col-md-4">
                                    <div class="coureses_Popular_thumb">
                                        <figure>
                                            <img alt="{{ $item->nome }}" src="{{ asset('images/' . $item->foto) }}">
                                            <a class="iq_link_1" href="{{ route('indexCurso.show', $item) }}">Ver
                                                Detalhes</a>
                                        </figure>
                                        <div class="Popular_capstion_thumb">
                                            <div class="popular_capstion">
                                                <h5><a
                                                        href="{{ route('indexCurso.show', $item) }}">{{ $item->nome }}</a>
                                                </h5>
                                                <div class="map_icon"><i class="fa fa-map-marker"></i>Centro de Formação -
                                                    Santa Cruz</div>
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:95%;"></div>
                                                </div>
                                                <p>{{ $item->descricao }}</p>
                                            </div>
                                            <ul class="popular_capstion_bottom">
                                                <li>
                                                    <span>Duração</span>
                                                    <span class="right">ínicio</span>
                                                </li>
                                                <li>
                                                    <span>{{ $item->duracao }}</span>
                                                    <span class="right">{{ $item->data_inicio }}</span>
                                                </li>
                                            </ul>
                                            <span class="price"><strong>{{ number_format($item->preco, 2, ',', '.') }}
                                                    Kz</strong> Inscrição</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h6 class="text-center">Nenhum curso disponível</h6>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        <div class="">
                            @forelse ($cursosComMaisPagamentos as $item)
                                <div class="">
                                    <div class="coureses_Popular_thumb">
                                        <figure>
                                            <img alt="{{ $item->nome }}" src="{{ asset('images/' . $item->foto) }}">
                                            <a class="iq_link_1" href="{{ route('indexCurso.show', $item) }}">Ver
                                                Detalhes</a>
                                        </figure>
                                        <div class="Popular_capstion_thumb">
                                            <div class="popular_capstion">
                                                <h5><a
                                                        href="{{ route('indexCurso.show', $item) }}">{{ $item->nome }}</a>
                                                </h5>
                                                <div class="map_icon"><i class="fa fa-map-marker"></i>Centro de Formação -
                                                    Santa Cruz</div>
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:95%;"></div>
                                                </div>
                                                <p>{{ $item->descricao }}</p>
                                            </div>
                                            <ul class="popular_capstion_bottom">
                                                <li>
                                                    <span>Duração</span>
                                                    <span class="right">ínicio</span>
                                                </li>
                                                <li>
                                                    <span>{{ $item->duracao }}</span>
                                                    <span class="right">{{ $item->data_inicio }}</span>
                                                </li>
                                            </ul>
                                            <span class="price"><strong>{{ number_format($item->preco, 2, ',', '.') }}
                                                    Kz</strong> Inscrição</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h6 class="text-center">Nenhum curso disponível</h6>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                        <div class="">
                            em promoção
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="iq_gallery_bg">
            <div class="iq_heading_1 text-center">
                <h4>Nosso <span>Portfólio</span></h4>
                <p>Explore momentos marcantes e atividades realizadas no Centro de Formação Profissional Santa Cruz.
                    <br>Descubra como formamos profissionais capacitados para o mercado de trabalho.
                </p>
            </div>

            <div id="filters" class="iq_gallery_menu">
                <ul id="filterable-item-filter-1">
                    <li><a class="active" data-value="all">Todas</a></li>
                    <li><a data-value="1">Contabilidade</a></li>
                    <li><a data-value="2">Economia</a></li>
                    <li><a data-value="3">Finanças</a></li>
                    <li><a data-value="4">Tecnologias</a></li>
                    <li><a data-value="5">Gestão</a></li>
                </ul>
            </div>

            <div id="filterable-item-holder-1" class="filterable_container main-gallery">
                <div class="col-md-4 col-sm-6 filterable-item all 1 2 3">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/gallery-01.jpg') }}" alt="Imagem">
                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Curso de Contabilidade</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 filterable-item all 1 5">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/gallery-02.jpg') }}" alt="Imagem">
                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Curso de Gestão</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 filterable-item all 2 4">
                    <div class="thumb">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/gallery-03.jpg') }}" alt="Imagem">
                            <figcaption class="overlay1">
                                <div class="link-wrapper">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <h6>Workshop de Tecnologia</h6>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="load-more">
                <a class="iq_link_1" href="#">CARREGAR MAIS</a>
            </div>
        </section>

        <section class="iq_upcomming_bg">
            <div class="container">
                <div class="iq_heading_1 text-center">
                    <h4>Próximos <span>Eventos</span></h4>
                    <p>Fique por dentro dos eventos e atividades que acontecerão no Centro de Formação Profissional
                        Santa Cruz. <br> Participe e amplie seu conhecimento!</p>
                </div>
                <div class="row">
                    @forelse ($eventos as $item)
                        <!-- Evento Start -->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Evento/' . $item->imagem) }}" alt="Imagem do Evento">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>{{ \Carbon\Carbon::parse($item->data_inicio)->format('d M') }}</span>
                                    <p>{{ \Carbon\Carbon::parse($item->data_inicio)->format('H:i A') }}</p>
                                    <h5><a href="{{ route('evento.detalhes', $item->id) }}">{{ $item->titulo }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h6 class="text-center">Nenhum Evento Agendado...</h6>
                    @endforelse
                </div>
            </div>
        </section>

        <!--Number Counter Wrap Start-->
        <section class="iq_number_count_bg">
            <div class="container">
                <div class="row">
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-lecture">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span class="path9"></span><span
                                    class="path10"></span><span class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span class="path15"></span><span
                                    class="path16"></span><span class="path17"></span><span class="path18"></span><span
                                    class="path19"></span><span class="path20"></span><span class="path21"></span><span
                                    class="path22"></span><span class="path23"></span><span class="path24"></span><span
                                    class="path25"></span><span class="path26"></span><span class="path27"></span><span
                                    class="path28"></span><span class="path29"></span><span class="path30"></span><span
                                    class="path31"></span><span class="path32"></span><span class="path33"></span><span
                                    class="path34"></span><span class="path35"></span><span class="path36"></span><span
                                    class="path37"></span><span class="path38"></span>
                            </i>
                            <span class="counter">{{ $totalTurma }}</span>
                            <h6>Total de Turmas</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-books">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span class="path9"></span><span
                                    class="path10"></span><span class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span class="path15"></span><span
                                    class="path16"></span><span class="path17"></span>
                            </i>
                            <span class="counter">{{ $totalCurs }}</span>
                            <h6>Total de Cursos</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-drawing">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span class="path9"></span><span
                                    class="path10"></span><span class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span class="path15"></span><span
                                    class="path16"></span><span class="path17"></span><span class="path18"></span><span
                                    class="path19"></span><span class="path20"></span><span class="path21"></span><span
                                    class="path22"></span><span class="path23"></span><span class="path24"></span><span
                                    class="path25"></span><span class="path26"></span><span class="path27"></span><span
                                    class="path28"></span><span class="path29"></span><span class="path30"></span><span
                                    class="path31"></span><span class="path32"></span><span class="path33"></span><span
                                    class="path34"></span><span class="path35"></span>
                            </i>
                            <span class="counter">1591</span>
                            <h6>Total Tests</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                    <!--Number Counter Start-->
                    <div class="col-md-3 col-sm-3">
                        <div class="iq_counter">
                            <i class="icon-diploma-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span class="path9"></span><span
                                    class="path10"></span><span class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span class="path15"></span><span
                                    class="path16"></span><span class="path17"></span><span class="path18"></span><span
                                    class="path19"></span><span class="path20"></span><span class="path21"></span><span
                                    class="path22"></span><span class="path23"></span><span class="path24"></span><span
                                    class="path25"></span><span class="path26"></span><span class="path27"></span><span
                                    class="path28"></span>
                            </i>
                            <span class="counter">{{ $totalFormando }}</span>
                            <h6>Total de Formandos</h6>
                        </div>
                    </div>
                    <!--Number Counter End-->
                </div>
            </div>
        </section>
        <!--Number Counter Wrap End-->
        <!--Our Teacher Wrap Start-->
        <section>
            <div class="container">
                <!-- Cabeçalho da Seção -->
                <div class="iq_heading_1 text-center">
                    <h4>Nossos <span>Formadores</span></h4>
                    <p>Conheça os nossos formadores altamente qualificados que estão aqui para guiá-lo <br>na sua
                        jornada de aprendizado no Centro de Formação Profissional Santa Cruz.</p>
                </div>
                <!-- Fim do Cabeçalho da Seção -->

                <!-- Lista de Formadores -->
                <div class="row">
                    @foreach ($funcionarios as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_teacher_style_1">
                                <figure>
                                    <img src="{{ asset('images/' . $item->foto) }}" alt="Imagem do Formador">
                                </figure>
                                <div class="text">
                                    <h4><a href="#">{{ $item->nome }}</a></h4>
                                    <h6>Cursos</h6>
                                    <p>Descricao</p>
                                    <ul class="iq_footer_social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="center-slider-wrap">
            <div class="container">
                <div class="iq_heading_1 text-center">
                    <h4>Últimas do <span>Nosso Blog</span></h4>
                    <p>Fique por dentro das últimas novidades, eventos e dicas importantes compartilhadas pelos
                        nossos formadores e especialistas.</p>
                </div>
                <div class="blog-slider">
                    @forelse ($posts as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="center-dec">
                                <figure>
                                    <img src="{{ asset('blog/' . $item->imagem) }}" alt="Imagem do Post">
                                </figure>
                                <div class="text">
                                    <h5><a href="{{ route('blogs.show', $item->id) }}">{!! $item->titulo !!}</a></h5>
                                    <p>{!! $item->resumo !!}</p>
                                    <div class="text-footer pull-left">
                                        <a href="{{ route('blogs.show', $item->id) }}"><i
                                                class="fa fa-comments-o"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('blogs.show', $item->id) }}" class="iq_link_1">Leia Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h6 class="text-center">Nenhum Post Recente</h6>
                    @endforelse
                </div>
            </div>
        </section>
        <br>
        <section>
            <div class="container">
                <div class="iq_heading_1 text-center">
                    <h4>Testemunho de<span> Formandos</span></h4>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean
                        sollicitudin,
                        <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    </p>
                </div>


                <div class="owl-carousel owl-theme">
                    <div>
                        <div class="card text-left">
                            <div class="card-body">
                                <p>“ Recomendo para todos que querem melhorar suas habilidades na área. Muito prático e
                                    direto ao
                                    ponto! ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/testimonial-nav1.jpg') }}"
                                            alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-left">
                            <div class="card-body">
                                <p>“ Ótima experiência de aprendizado, com suporte rápido e eficiente. Amei! ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/testimonial-nav2.jpg') }}"
                                            alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-left">
                            <div class="card-body">
                                <p>“ O curso mudou minha vida! Os professores são excelentes e o material é muito
                                    completo. ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/testimonial-nav3.jpg') }}"
                                            alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="search-box" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog">
            <div class="iqoniq_courses_search">
                <div class="container">
                    <div class="iq_heading_1 text-center">
                        <h4>Pesquisar For<span>Our Courses</span></h4>
                        <p>Fill The Below Form and Star Searching</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="iq-input">
                                <input class="first_input" type="text" placeholder="Pesquisar Words">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="iq-input">
                                <input class="iq_link_1" type="submit" value="Start Pesquisar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000, // Tempo de transição mais suave
                smartSpeed: 1000, // Suavidade na transição manual
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 2
                    }
                }
            });
        });
    </script>

@endsection
