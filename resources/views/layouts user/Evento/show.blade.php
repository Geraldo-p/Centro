@extends('layouts user.admin')
@section('titulo', 'Evento - Detalhes')
@section('conteudo')
    <div class="iner_banner ent_detail">
        <div class="container">
            <h5>Detalhes - Evento</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">Ínicio</a></li>
                    <li><a href="#"> Detalhes - Evento</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="iq_content_wrap">
        <section>
            <div class="event-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="event_pg_blog">
                                <figure>
                                    <img src="{{ asset('Evento/' . $evento->imagem) }}" alt="" />
                                </figure>
                                <div class="fig_caption link">
                                    <span><strong>{{ \Carbon\Carbon::parse($evento->data_inicio)->format('M') }}</strong>
                                        {{ \Carbon\Carbon::parse($evento->data_inicio)->format('d') }}</span>
                                    <a href="#"><i class="fa fa-user"></i>Coordenador
                                        {{ $evento->funcionarios->nome }}</a>
                                </div>
                                <div class="iq_heading_1 text-left">
                                    <h4> {{ $evento->titulo }}</h4>
                                </div>
                                <ul class="course_comments">
                                    <li>
                                        <a href="#"><i class="fa fa-clock-o"></i>Ínicio:
                                            {{ \Carbon\Carbon::parse($evento->data_inicio)->format('H:i') }}'</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-user"></i>Termina:
                                            {{ \Carbon\Carbon::parse($evento->data_fim)->format('H:i') }}'</a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-comments-o"></i>{{ \Carbon\Carbon::parse($evento->data_inicio)->format('M, d/m/Y') }}</a>
                                    </li>
                                </ul>
                                <p>{!! $evento->resumo !!}</p>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="categries-list">
                                            @foreach ($temasParte1 as $item)
                                                <li><a href="#">{{ trim($item) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="categries-list">
                                            @foreach ($temasParte2 as $item)
                                                <li><a href="#">{{ trim($item) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <hr>
                                </div>
                                <p>
                                    {!! $evento->descricao !!}
                                </p>
                                <div class="edu_upmg_area">
                                    <div class="iq_heading_1 text-left">
                                        <h4>Eventos <span>Futuros</span></h4>
                                    </div>
                                    <div class="row">
                                        @forelse ($eventos as $item)
                                            <div class="col-md-5 col-sm-5">
                                                <div class="iq_upcomming_event">
                                                    <figure>
                                                        <img src="{{ asset('Evento/' . $item->imagem) }}"
                                                            alt="Imagem do Evento">
                                                    </figure>
                                                    <div class="iq_upcomming_des">
                                                        <span>{{ \Carbon\Carbon::parse($item->data_inicio)->format('d M') }}</span>
                                                        <p>{{ \Carbon\Carbon::parse($item->data_inicio)->format('H:i A') }}
                                                        </p>
                                                        <h5><a
                                                                href="{{ route('evento.detalhes', $item->id) }}">{{ $item->titulo }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <h6 class="text-center">Nenhum vento Futuro</h6>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="aside-bar">
                                <div class="widget widget-pesquisar">
                                    <form class="iq-input">
                                        <input placeholder="Pesquisar ..." type="text">
                                        <label class="iq-input-icon"><input type="submit"></label>
                                    </form>
                                </div>
                                <div class="widget course-description">
                                    <h5 class="widget-title"><span>Mais Sobre o</span> Evento</h5>
                                    <ul class="course-lesson-list">
                                        <li>
                                            <a href="#">
                                                <span class="icon-signs"></span>
                                                Data de Ínicio</a>
                                            {{ \Carbon\Carbon::parse($evento->data_inicio)->format('d/m/Y H:i') }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-translate"></span>
                                                Data de Término</a>
                                            {{ \Carbon\Carbon::parse($evento->data_fim)->format('d/m/Y H:i') }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-home"></span>
                                                Local</a>
                                            {{ $evento->local }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-home"></span>
                                                Tipo de Evento</a>
                                            {{ $evento->tipo_evento }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-users"></span>
                                                Capacidade</a>
                                            {{ $evento->capacidade }} pessoas
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-dollar"></span>
                                                Entrada: </a>
                                            {{ number_format($evento->custo, 2, ',', '.') }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-check"></span>
                                                Status</a>
                                            {{ $evento->status }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon-user"></span>
                                                Coordenador</a>
                                            {{ $evento->funcionarios->nome }}
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget_archive">
                                    <h5 class="widget-title"><span>Nossos</span> Cursos</h5>
                                    <ul>
                                        @forelse ($cursos as $item)
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
                                <div class="widget widget-popular">
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
                                <div class="widget widget_time">
                                    <h5 class="widget-title"><span>Horas de</span> Trabalho</h5>
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
                                <div class="widget widget-popular">
                                    <h5 class="widget-title"><span>cursos em</span> Promoção</h5>
                                    <div class="popular_thumb">
                                        <figure>
                                            <img src="{{ asset('Template user/extra-images/popular-thumb3.jpg') }}"
                                                alt="" />
                                        </figure>
                                        <div class="overflow-text">
                                            <h6><a href="#">Professional Teching Course</a></h6>
                                            <div class="rating-wrap">
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                            </div>
                                            <p>Anna Doe</p>
                                            <span>$99.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-tag">
                                    <h5 class="widget-title"><span>tags</span></h5>
                                    <div class="tag">
                                        @forelse ($tags as $item)
                                            <a class="tag-link" href="#">{{ $item->nome }}</a>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
