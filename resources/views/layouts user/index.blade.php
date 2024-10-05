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
               <a href=""></a> <img src="{{ asset('Template User/extra-images/banner-01.jpg') }}" class="d-block w-100" alt="Imagem 1">
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
                    <!--Search Wrap Start-->
                    <div class="col-md-4">
                        <div class="iq_search_courses">
                            <h4>Search Courses</h4>
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
                                    <input class="iq_link_1" type="submit" value="Search">
                                </div>
                                <!--Input End-->
                            </form>
                        </div>
                    </div>
                    <!--Search Wrap End-->
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
                    <a class="iq_link_1" href="{{route("register")}}">Junte-se a Nós</a>
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
                <!--Heading Wrap End-->
                <!--Tab Menu Wrap Start-->
                <div class="iq_tab_menu">
                    <ul id="tabs" data-tabs="tabs">
                        <li class="active"><a data-toggle="tab" href="#featured">Destaques</a></li>
                        <li><a data-toggle="tab" href="#popular">Popular</a></li>
                    </ul>
                </div>
                <!--Tab Menu Wrap End-->
                <!--Tab Menu Detail Wrap Start-->
                <div id="my-tab-content" class="tab-content">
                    <div class="row tab-pane active" id="featured">
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-1.jpg') }}"
                                        alt="Curso de Informática e TI">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-student"></span>
                                    </div>
                                    <h5><a href="#">Cursos de Informática & TI</a></h5>
                                    <p>Domine as tecnologias que estão moldando o futuro. Desde redes de
                                        computadores até programação avançada, nossos cursos oferecem as habilidades
                                        necessárias para se destacar no competitivo mercado de TI.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-02.jpg') }}"
                                        alt="Curso de Negócios e Finanças">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-lecture"></span>
                                    </div>
                                    <h5><a href="#">Negócios & Finanças</a></h5>
                                    <p>Desenvolva suas competências em gestão e finanças com nossos cursos que
                                        preparam você para liderar com eficiência e tomar decisões estratégicas em
                                        um ambiente corporativo dinâmico.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 hidden-sm">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-03.jpg') }}"
                                        alt="Curso de Ciências Sociais">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-molecule"></span>
                                    </div>
                                    <h5><a href="#">Ciências Sociais</a></h5>
                                    <p>Entenda as complexidades da sociedade moderna com nossos cursos de ciências
                                        sociais. Aprenda a analisar e propor soluções para os desafios sociais
                                        contemporâneos.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                    </div>
                    <div class="row tab-pane" id="popular">
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-01.jpg') }}"
                                        alt="Curso de Neurociência">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-doctor-2"></span>
                                    </div>
                                    <h5><a href="#">Neurociência</a></h5>
                                    <p>Explore as profundezas da mente humana com nossos cursos de neurociência.
                                        Combinando teoria e prática, nossos programas são perfeitos para quem deseja
                                        ingressar ou avançar na área médica e científica.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-02.jpg') }}"
                                        alt="Curso de Política">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-debate"></span>
                                    </div>
                                    <h5><a href="#">Ciências Políticas</a></h5>
                                    <p>Compreenda os sistemas políticos e participe ativamente nas mudanças sociais
                                        com nossos cursos de ciências políticas. Uma formação indispensável para
                                        quem quer atuar na esfera pública ou acadêmica.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                        <!--Courses List Start-->
                        <div class="col-md-4 hidden-sm">
                            <div class="iq_course_list">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/featured-course-03.jpg') }}"
                                        alt="Curso de Zoologia">
                                </figure>
                                <div class="iq_course_list_des">
                                    <div class="iq_course_icon">
                                        <span class="icon-medical-3"></span>
                                    </div>
                                    <h5><a href="#">Zoologia</a></h5>
                                    <p>Se o seu interesse é a vida animal, nossos cursos de zoologia oferecem o
                                        conhecimento necessário para compreender os diferentes ecossistemas e
                                        contribuir para a conservação da biodiversidade.</p>
                                    <ul>
                                        <li>
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>101 Avali.</li>
                                        <li><i class="fa fa-user"></i>3.1 mil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Courses List End-->
                    </div>
                </div>
                <!--Tab Menu Detail Wrap End-->
            </div>
        </section>

        <!--Our Featured Courses Wrap End-->
        <!--Our Gallery Wrap Start-->
        <section class="iq_gallery_bg">
            <!-- Início da Seção de Cabeçalho -->
            <div class="iq_heading_1 text-center">
                <h4>Nosso <span>Portfólio</span></h4>
                <p>Explore momentos marcantes e atividades realizadas no Centro de Formação Profissional Santa Cruz.
                    <br>Descubra como formamos profissionais capacitados para o mercado de trabalho.
                </p>
            </div>
            <!-- Fim da Seção de Cabeçalho -->

            <!-- Início do Menu de Categorias da Galeria -->
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
            <!-- Fim do Menu de Categorias da Galeria -->

            <div id="filterable-item-holder-1" class="filterable_container main-gallery">
                <!-- Início da Lista de Itens da Galeria -->
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
                <!-- Fim da Lista de Itens da Galeria -->

                <!-- Início da Lista de Itens da Galeria -->
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
                <!-- Fim da Lista de Itens da Galeria -->

                <!-- Início da Lista de Itens da Galeria -->
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
                <!-- Fim da Lista de Itens da Galeria -->
            </div>

            <div class="load-more">
                <a class="iq_link_1" href="#">CARREGAR MAIS</a>
            </div>
        </section>

        <!--Our Gallery Wrap End-->
        <!--UpComming Event Wrap Start-->
        <section class="iq_upcomming_bg">
            <div class="container">
                <!-- Início da Seção de Cabeçalho -->
                <div class="iq_heading_1 text-center">
                    <h4>Próximos <span>Eventos</span></h4>
                    <p>Fique por dentro dos eventos e atividades que acontecerão no Centro de Formação Profissional
                        Santa Cruz. <br> Participe e amplie seu conhecimento!</p>
                </div>
                <!-- Fim da Seção de Cabeçalho -->

                <!-- Início da Lista de Próximos Eventos -->
                <div class="row">
                    <!-- Evento Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_upcomming_event">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/upcomming-event-01.jpg') }}"
                                    alt="Imagem do Evento">
                            </figure>
                            <div class="iq_upcomming_des">
                                <span>21 ago</span>
                                <p>10:00 AM</p>

                                <h5><a href="{{ url('evento-detalhe', []) }}">Participe no nosso evento especial</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Evento End -->

                    <!-- Evento Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_upcomming_event">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/upcomming-event-02.jpg') }}"
                                    alt="Imagem do Evento">
                            </figure>
                            <div class="iq_upcomming_des">
                                <span>21 ago</span>
                                <p>10:00 AM</p>
                                <h5><a href="{{ url('evento-detalhe', []) }}">Participe no nosso evento especial</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Evento End -->

                    <!-- Evento Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_upcomming_event">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/upcomming-event-03.jpg') }}"
                                    alt="Imagem do Evento">
                            </figure>
                            <div class="iq_upcomming_des">
                                <span>21 ago</span>
                                <p>10:00 AM</p>
                                <h5><a href="#">Participe no nosso evento especial</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Evento End -->

                    <!-- Evento Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_upcomming_event">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/upcomming-event-04.jpg') }}"
                                    alt="Imagem do Evento">
                            </figure>
                            <div class="iq_upcomming_des">
                                <span>21 ago</span>
                                <p>10:00 AM</p>
                                <h5><a href="#">Participe no nosso evento especial</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Evento End -->

                    <!-- Mais eventos podem ser adicionados aqui... -->

                </div>
                <!-- Fim da Lista de Próximos Eventos -->
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
                            <span class="counter">2021</span>
                            <h6>Total Lectures</h6>
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
                            <span class="counter">1411</span>
                            <h6>Total Courses</h6>
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
                            <span class="counter">9921</span>
                            <h6>Total Classes</h6>
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
                    <!-- Formador 1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/teacher-01.jpg') }}"
                                    alt="Imagem do Formador">
                            </figure>
                            <div class="text">
                                <h4><a href="#">Ana Santos</a></h4>
                                <h6>Instrutora de Línguas</h6>
                                <p>A Ana é especializada no ensino de idiomas com uma vasta experiência em técnicas
                                    de aprendizagem inovadoras e eficazes.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Fim do Formador 1 -->

                    <!-- Formador 2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="iq_teacher_style_1">
                            <div class="text">
                                <h4><a href="#">João Pereira</a></h4>
                                <h6>Vice-Diretor</h6>
                                <p>João é responsável pela gestão de cursos e tem mais de 10 anos de experiência na
                                    administração de centros de formação.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <figure>
                                <img src="{{ asset('Template User/extra-images/teacher-02.jpg') }}"
                                    alt="Imagem do Formador">
                            </figure>
                        </div>
                    </div>
                    <!-- Fim do Formador 2 -->

                    <!-- Formador 3 -->
                    <div class="col-md-4 hidden-sm">
                        <div class="iq_teacher_style_1">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/teacher-03.jpg') }}"
                                    alt="Imagem do Formador">
                            </figure>
                            <div class="text">
                                <h4><a href="#">Sara Antunes</a></h4>
                                <h6>Coordenadora de Cursos</h6>
                                <p>Sara é a nossa coordenadora, com um grande histórico em desenvolver programas
                                    educacionais que atendem às necessidades do mercado.</p>
                                <ul class="iq_footer_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Fim do Formador 3 -->
                </div>
                <!-- Fim da Lista de Formadores -->
            </div>
        </section>

        <!--Our Teacher Wrap End-->
        <!--Our Blog Slider Start-->
        <section class="center-slider-wrap">
            <div class="container">
                <!-- Cabeçalho da Seção -->
                <div class="iq_heading_1 text-center">
                    <h4>Últimas do <span>Nosso Blog</span></h4>
                    <p>Fique por dentro das últimas novidades, eventos e dicas importantes compartilhadas pelos
                        nossos formadores e especialistas.</p>
                </div>
                <!-- Fim do Cabeçalho da Seção -->

                <!-- Início do Slider de Blogs -->
                <div class="blog-slider">
                    <div class="col-md-4 col-sm-6">
                        <!-- Blog Post Início -->
                        <div class="center-dec">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/center-img.jpg') }}" alt="Imagem do Post">
                            </figure>
                            <div class="text">
                                <h5><a href="#">Técnicas de Estudo Eficientes para Aprendizagem Rápida</a>
                                </h5>
                                <p>Descubra como aprimorar seus métodos de estudo para aproveitar ao máximo seu
                                    tempo e alcançar seus objetivos de formação.</p>
                                <div class="text-footer pull-left">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-comments-o"></i></a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="iq_link_1">Leia Mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post Fim -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- Blog Post Início -->
                        <div class="center-dec">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/center-img2.jpg') }}"
                                    alt="Imagem do Post">
                            </figure>
                            <div class="text">
                                <h5><a href="#">O Impacto da Tecnologia no Mercado de Trabalho</a></h5>
                                <p>Veja como a evolução tecnológica está transformando o cenário profissional e como
                                    se preparar para essas mudanças.</p>
                                <div class="text-footer pull-left">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-comments-o"></i></a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="iq_link_1">Leia Mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post Fim -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- Blog Post Início -->
                        <div class="center-dec">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/center-img3.jpg') }}"
                                    alt="Imagem do Post">
                            </figure>
                            <div class="text">
                                <h5><a href="#">Dicas para Melhorar sua Comunicação Profissional</a></h5>
                                <p>Saiba como aprimorar suas habilidades de comunicação para se destacar no ambiente
                                    de trabalho e nas entrevistas.</p>
                                <div class="text-footer pull-left">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-comments-o"></i></a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="iq_link_1">Leia Mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post Fim -->
                    </div>
                </div>
                <!-- Fim do Slider de Blogs -->
            </div>
        </section>

        <!--Our Blog Slider End-->

        <!--Testimonial Slider Wrap Start-->
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
                    <!--Testimonial Start-->
                    <div>
                        <div class="testimonial item">
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
                    <!--Testimonial End-->
                    <!--Testimonial Start-->
                    <div>
                        <div class="testimonial item">
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
                    <!--Testimonial End-->
                    <!--Testimonial Start-->
                    <div>
                        <div class="testimonial item">
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
                    <!--Testimonial End-->
                </div>
                <!--Testimonial Slider End-->
            </div>
        </section>

        <!--Testimonial Slider Wrap End-->
    </div>
    <!--Iqoniq Content End-->

    <!-- Modal -->
    <div class="modal fade" id="search-box" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog">
            <!--SEARCH section STARTS-->
            <div class="iqoniq_courses_search">
                <div class="container">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Search For<span>Our Courses</span></h4>
                        <p>Fill The Below Form and Star Searching</p>
                    </div>
                    <!--Heading Wrap End-->
                    <!--iqoniq FORM STARTS-->
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <input class="first_input" type="text" placeholder="Search Words">
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <input class="iq_link_1" type="submit" value="Start Search">
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                    </div>
                    <!--iqoniq FROM END-->
                </div>
            </div>
            <!--SEARCH section ENDS-->
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
                smartSpeed: 1000,    // Suavidade na transição manual
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
