@extends('layouts user.admin')
@section('titulo', 'Detalhes do Curso')
@section('css')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection
@section('conteudo')
    <div class="iner_banner">
        <div class="container">
            <h5>Cursos</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">ínicio</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Detalhes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="iq_content_wrap">
        <!--coures_single_page START-->
        <section class="coures_single_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--course_single_heading START-->
                        <div class="course_single_heading">
                            <!--Heading Wrap Start-->
                            <div class="iq_heading_1 text-left">
                                <h4>{{ $cursos->nome }} <span></span></h4>
                            </div>
                            <!--Heading Wrap End-->
                            <!--courses_socil START-->
                            <ul class="iq_footer_social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                            <!--courses_socil end-->
                            <!--course_comments START-->
                            <ul class="course_comments">
                                <li>
                                    <a href="#"><i class="fa fa-clock-o"></i>Nov 2015</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user"></i>Nov 2015</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments-o"></i>Nov 2015</a>
                                </li>
                            </ul>
                        </div>
                        <div class="about_courses">
                            <div class="about_courses_thumb">
                                <div class="lessons-slider">
                                    <div>
                                        <img src="{{ asset('images/' . $cursos->foto) }}" alt="" />
                                    </div>
                                </div>
                                <div class="iq-course-info">
                                    <div class="course-info">
                                        <figure>
                                            <img src="{{ asset('Template user/extra-images/admin.jpg') }}">
                                        </figure>
                                        <div class="text-overflow">
                                            <h6><span>By</span> {{ $cursos->users->name }}</h6>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span>
                                            <i class="fa fa-tags"></i>
                                        </span>
                                        <div class="text-overflow">
                                            <h6><span>Categoria</span> {{ $cursos->categorias->nome }}</h6>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span>
                                            <i class="fa fa-dollar"></i>
                                        </span>
                                        <div class="text-overflow">
                                            <h6><span>Taxa de Inscrição</span>
                                                {{ number_format($cursos->preco, 2, ',', '.') }} Kz</h6>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                        <div class="text-overflow">
                                            <h6><span>Taxa por Mês</span> {{ number_format($cursos->pag_mes, 2, ',', '.') }}
                                                Kz</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="iq_tab_menu">
                                    <ul id="tabs" data-tabs="tabs">
                                        <li class="active"><a data-toggle="tab" href="#description">Descrição</a></li>
                                        <li><a data-toggle="tab" href="#instructor">Formandos</a></li>
                                    </ul>
                                </div>
                                <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <div class="about_courses_thumb_capstion">
                                            <div class="iq_heading_1 iq_heading_2 text-left">
                                                <h4>Sobre o <span>Curso</span></h4>
                                            </div>
                                            <p>
                                                {{ $cursos->descricao }}
                                            </p>
                                            <div class="border-div"></div>
                                            <div class="iq_heading_1 iq_heading_2 text-left">
                                                <h4>Os <span>Módulos</span></h4>
                                            </div>
                                            <p>
                                                {{-- {{ $cursos->modulos->descricao }} --}}
                                            </p>
                                        </div>
                                        <!--about_courses_thumb end-->
                                        <div class="row">
                                            @forelse ($modulos1 as $item)
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="categries-list">
                                                        <li><a href="#">{{ $item->nome }}</a></li>
                                                    </ul>
                                                </div>
                                            @empty
                                                <h6>Nenhum Módulos Associado</h6>
                                            @endforelse
                                            @foreach ($modulos2 as $item)
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="categries-list">
                                                        <li><a href="#">Introduction of The Course</a></li>
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="border-div"></div>
                                        <!--course_lesson START-->
                                        <ul class="categries-list">
                                            @foreach ($cursos->modulos as $item)
                                                <li>
                                                    <a href="#">{{ $item->nome }}</a><span>Qtd.Lições :
                                                        {{ $item->qtd_licoes }}</span>
                                                </li>
                                            @endforeach

                                        </ul>
                                        {{-- <a class="iq_link_1" href="#">View More lessons</a> --}}
                                    </div>
                                    <div class="tab-pane" id="instructor">
                                        <!--Teacher Wrap List Start-->
                                        <!--Teacher Thumb Start-->
                                        <div class="iq_teacher_style_1">
                                            <figure>
                                                <img src="{{ asset('Template user/extra-images/teacher-03.jpg') }}"
                                                    alt="Image Here">
                                            </figure>
                                            <div class="text">
                                                <h4><a href="#">Sara Adward</a></h4>
                                                <h6>Manager</h6>
                                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                    auctor aliquet. Aenean sollicitudinris.</p>
                                                <ul class="iq_footer_social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--about_courses end-->
                        <div class="course-rating-outer">
                            <!--Heading Wrap Start-->
                            <div class="iq_heading_1 iq_heading_2 text-left">
                                <h4>Classificação do <span>Curso</span></h4>
                            </div>
                            <!--Heading Wrap End-->
                            <div class="course-rating">
                                <div class="course-rating-head">
                                    <span><b>4.4/5.0</b></span>
                                    <span>360 ratings</span>
                                    <div class="rating_down">
                                        <div class="rating_up" style="width:100%;"></div>
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="course-progress">
                                        <span class="pull-left">5 Stars</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right">15</span>
                                    </div>
                                    <div class="course-progress">
                                        <span class="pull-left">4 Stars</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right">09</span>
                                    </div>
                                    <div class="course-progress">
                                        <span class="pull-left">3 Stars</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right">03</span>
                                    </div>
                                    <div class="course-progress">
                                        <span class="pull-left">2 Stars</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right">05</span>
                                    </div>
                                    <div class="course-progress">
                                        <span class="pull-left">1 Stars</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-outer">
                            <div class="iq_heading_1 iq_heading_2 text-left">
                                <h4>Comentarios de <span>Estudantes</span></h4>
                            </div>
                            <div class="feedback-wrap">
                                <div class="owl-carousel owl-theme">
                                    <div class="feedback">
                                        <div class="feedback-capstion">
                                            <figure>
                                                <img src="{{ asset('Template user/extra-images/s_thumb.jpg') }}"
                                                    alt="" />
                                            </figure>
                                            <h6>Anna Doe Says :</h6>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                                                elit
                                                consequat ipsum.</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="feedback">
                                            <div class="feedback-capstion">
                                                <figure>
                                                    <img src="{{ asset('Template user/extra-images/s_thumb.jpg') }}"
                                                        alt="" />
                                                </figure>
                                                <h6>Anna Doe Says :</h6>
                                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                    auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                                                    elit
                                                    consequat ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aside-bar">
                            <!--course_inrp_side_search START-->
                            <div class="widget widget-pesquisar">
                                <form class="iq-input">
                                    <input placeholder="Pesquisar ..." type="text">
                                    <label class="iq-input-icon"><input type="submit"></label>
                                </form>
                            </div>
                            <div class="widget course-description">
                                <h5 class="widget-title"><span>Mais Sobre o</span> Curso</h5>
                                <p>{{ $cursos->descricao }} </p>
                                <ul class="course-lesson-list">
                                    <li>
                                        <a href="#">
                                            <span class="icon-level-up-arrow"></span>
                                            Descrição</a>
                                        {{ $cursos->nome }}
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-signs">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                                <span class="path11"></span>
                                                <span class="path12"></span>
                                                <span class="path13"></span>
                                                <span class="path14"></span>
                                                <span class="path15"></span>
                                            </span>
                                            Data de ínicio</a>
                                        {{ $cursos->data_inicio }}
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-translate">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </span>
                                            Data de Término</a>
                                        {{ $cursos->data_fim }}

                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-home">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </span>
                                            Preço de Inscrição</a>
                                        {{ number_format($cursos->preco, 2, ',', '.') }} Kz

                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-home">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </span>
                                            Pagamento Mensal</a>
                                        {{ number_format($cursos->pag_mes, 2, ',', '.') }} Kz

                                    </li>
                                </ul>
                            </div>
                            <!--course_inrp_side_description end-->
                            <!--coures_instractor_area START-->
                            <div class="widget coures_instractor_area">
                                @auth
                                    @if ($cursos->data_fim && \Carbon\Carbon::now('Africa/Luanda')->gt(\Carbon\Carbon::parse($cursos->data_fim)))
                                        <div class="alert alert-danger">
                                            <center> Inscrições Encerradas </center>
                                        </div>
                                    @else
                                        <a href="{{ route('inscrever.curso', $cursos->id) }}">
                                            <div class="alert alert-success">
                                                <center> Se Inscrever no Curso </center>
                                            </div>
                                        </a>
                                    @endif
                                @endauth
                                @guest
                                    <center>
                                        <a href="{{ route('login') }}">
                                            <div class="alert alert-warning">
                                                Faça Login Para se
                                                Inscrever neste Curso
                                            </div>
                                        </a>
                                    </center>
                                @endguest
                                <h5><a href="#">Formador</a></h5>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/instractor.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">{{ $funcionario->nome }}</a></h5>
                                        <p>{{ $cursos->categorias->nome }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_archive">
                                <h5 class="widget-title"><span>Nossos</span> Cursos</h5>

                                <ul>
                                    @forelse ($NossoCursos as $item)
                                        <li>
                                            <a
                                                href="#">{{ $item->nome }}</a><span>{{ $item->modulos->count() }}</span>
                                        </li>
                                    @empty
                                        <center>
                                            <h5>Nenhum Curso de Momento...</h5>
                                        </center>
                                    @endforelse
                                </ul>
                            </div>
                            <!--coures_archives end-->
                            <!--COURES CATEGORIES START-->
                            <div class="widget widget_time">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Horas de</span> Trabalho</h5>
                                <!--Widget Title End-->
                                <ul>
                                    <li>
                                        <span>Segunda-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Terça-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Quarta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Quinta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Sexta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Sábado</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Domingo</span>Closed
                                    </li>
                                </ul>
                            </div>
                            <!--COURES CATEGORIES END-->
                            <!--POPULAR START-->
                            <div class="widget widget-popular">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>cursos</span> populares</h5>
                                @forelse ($cursosComMaisPagamentos as $item)
                                    <div class="popular_thumb">
                                        <figure>
                                            <img src="{{ asset('images/' . $item->foto) }}" alt="" />
                                        </figure>
                                        <div class="overflow-text">
                                            <h6><a href="#">{{ $item->cursos->nome }}</a></h6>
                                            <p>Inscrições: Aberta<br>Data de Ínicio:
                                                {{ \Carbon\Carbon::parse($item->cursos->data_inicio)->format('M d, Y') }}
                                            </p>
                                        </div>
                                    </div>
                                @empty
                                    <center>
                                        <h5>Nenhum Curso de Momento...</h5>
                                    </center>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--coures_single_page end-->
    </div>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 2000, // Tempo de transição mais suave
                smartSpeed: 1000, // Suavidade na transição manual
                items: 1, // Exibir um item por vez
                dots: true, // Indicadores de progresso
                // animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                // animateOut: 'slideUp',
                // animateIn: 'slideDown',
                // animateOut: 'slideLeft',
                // animateIn: 'slideRight',
                // animateOut: 'zoomOut',
                // animateIn: 'zoomIn',
                //     animateOut: 'flipOut',
                //     animateIn: 'flipIn',
            });
        });
    </script>

@endsection
