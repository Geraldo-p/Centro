@extends('layouts user.admin')
@section('titulo', 'Cursos')

@section('conteudo')
    <div class="iner_banner">
        <div class="container">
            <h5>Cursos</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">ínicio</a></li>
                    <li><a href="#">Cursos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="iq_content_wrap">
        <section class="iqoniq1_our_courses_inpg">
            <div class="container">
                <div class="list_setting">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                aria-controls="home3" aria-selected="true">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                aria-controls="profile3" aria-selected="false">Recomendado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                aria-controls="contact3" aria-selected="false">Em Promoção</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent2">
                    <!-- Tab-pane Home -->
                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="owl-carousel owl-theme">
                            @forelse ($cursos as $item)
                                <div class="">
                                    <div class="coureses_Popular_thumb">
                                        <figure>
                                            <img alt="{{ $item->nome }}" src="{{ asset('images/' . $item->foto) }}">
                                            <a class="iq_link_1" href="{{ route('indexCurso.show', $item) }}">Ver
                                                Detalhes</a>
                                        </figure>
                                        <div class="Popular_capstion_thumb">
                                            <div class="popular_capstion">
                                                <h5><a href="{{ route('indexCurso.show', $item) }}">{{ $item->nome }}</a>
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
                                <h6>Nenhum curso disponível</h6>
                            @endforelse
                        </div>
                    </div>

                    <!-- Tab-pane Profile -->
                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        <div class="owl-carousel owl-theme">
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
                                <h6>Nenhum curso disponível</h6>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                        <div class="owl-carousel owl-theme">
                            em promoção
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section>
        <div class="container">
            <div class="iq_heading_1 text-center">
                <h4>Cursos em<span> Promoção</span></h4>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="">
                    <div class="iq_course_list">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}" alt="Image Here">
                        </figure>
                        <div class="iq_course_list_des">
                            <div class="iq_course_icon">
                                <span class="icon-student">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span class="path19"></span>
                                </span>
                            </div>
                            <h5><a href="#">Computer & IT Courses</a></h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lorem quis bibendum </p>
                            <ul>
                                <li>
                                    <!--RATING AREA START-->
                                    <div class="rating_down">
                                        <div class="rating_up" style="width:100%;"></div>
                                    </div>
                                    <!--RATING AREA End-->
                                </li>
                                <li>101 Reviews</li>
                                <li><i class="fa fa-user"></i>3.1 k</li>
                            </ul>
                        </div>
                        {{-- <a class="iq_link_1" href="{{ route('inscrever.curso') }}">Inscrever-se</a> --}}
                        <a class="iq_link_1" href="#">Inscrever-se</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                // Encontrar o carousel dentro do tab-pane ativo e reiniciá-lo
                var activeTabPane = $(e.target).attr('href');
                $(activeTabPane + ' .owl-carousel').trigger('refresh.owl.carousel');
            });
        });
    </script>
@endsection
