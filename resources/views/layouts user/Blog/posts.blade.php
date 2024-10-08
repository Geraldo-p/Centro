@extends('layouts user.admin')
@section('titulo', 'Blog')
@section('conteudo')

<div class="iner_banner">
    <div class="container">
        <h5>Blog</h5>
        <div class="banner_iner_capstion">
            <ul>
                <li><a href="#">Ínicio</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</div>
<!--Banner Wrap End-->
<!--iqoniq Content Start-->
<div class="iq_content_wrap">
    <!--BLOG1 PAGE START-->
    <section>
        <div class="blog1_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @forelse ($posts as $item)
                        <div class="blog-list">
                            <figure>
                                <img src="{{ asset('blog/'.$item->imagem) }}" alt="">
                            </figure>
                            <div class="blog-caption">
                                <span class="iq_course_icon">
                                    <span class="icon-scholarship">
                                        <span class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span><span
                                            class="path11"></span><span class="path12"></span><span
                                            class="path13"></span><span class="path14"></span><span
                                            class="path15"></span><span class="path16"></span><span
                                            class="path17"></span><span class="path18"></span>
                                    </span>
                                </span>
                                <h5 class="blog-title"><a
                                        href="{{ route('blogs.show', $item->id) }}">{{$item->titulo}}</a></h5>
                                <ul class="course_comments">
                                    <li>
                                        <a href="#"><i class="fa fa-user"></i>{{$item->users->name}},
                                            {{$item->users->nivel_acesso}}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-clock-o"></i>{{
                                            \Carbon\Carbon::parse($item->data_publicacao)->format('M d, Y') }}
                                        </a>
                                    </li>
                                </ul>
                                <p>{!! $item->resumo !!}</p>
                                <a class="iq_link_1" href="{{ route('blogs.show', $item->id) }}">LEIA MAIS</a>
                            </div>
                            <!--BLOG1 THUMB CAPSTION END-->
                        </div>
                        @empty
                        <center>
                            <h2>Não há posts disponíveis no momento.</h2>
                        </center>
                        @endforelse

                        <!--Pagination Start-->
                        <div class="iqoniq-pagination text-center">
                            {{ $posts->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        <!--Pagination End-->
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
                            <!--course_inrp_side_search end-->
                            <!--coures_archives start-->
                            <div class="widget widget_archive">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Nossos</span> Cursos</h5>
                                <!--Widget Title End-->
                                <ul>
                                    <li>
                                        <a href="#">Politics & History</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Journalism</a><span>01</span>
                                    </li>
                                    <li>
                                        <a href="#">Medical Sciences</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Health</a><span>01</span>
                                    </li>
                                    <li>
                                        <a href="#">Sports</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Atrs</a><span>02</span>
                                    </li>
                                    <li>
                                        <a href="#">Tourism & Culture</a><span>06</span>
                                    </li>
                                </ul>
                            </div>
                            <!--coures_archives end-->
                            <!--POPULAR START-->
                            <div class="widget widget-popular">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>cursos</span> populares</h5>
                                <!--Widget Title End-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb1.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb2.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb3.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                            </div>
                            <!--POPULAR END-->
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
                                <!--Widget Title End-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb5.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                        <!--COURES RATING AREA END-->
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb2.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                        <!--COURES RATING AREA END-->
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb3.jpg') }}"
                                            alt="" />
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                            </div>
                            <!--POPULAR END-->
                            <!--POPULAR START-->
                            <div class="widget widget-tag">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>tags</span></h5>
                                <!--Widget Title End-->
                                <div class="tag">
                                    <a class="tag-link" href="#">Science</a>
                                    <a class="tag-link" href="#">knowledge</a>
                                    <a class="tag-link" href="#">Courage</a>
                                    <a class="tag-link" href="#">Sports</a>
                                    <a class="tag-link" href="#">Impression</a>
                                    <a class="tag-link" href="#">History & Politics</a>
                                    <a class="tag-link" href="#">Admission</a>
                                    <a class="tag-link" href="#">Arts</a>
                                    <a class="tag-link" href="#">Research</a>
                                    <a class="tag-link" href="#">Career</a>
                                    <a class="tag-link" href="#">PHD</a>
                                </div>
                            </div>
                            <!--POPULAR END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BLOG1 PAGE END-->
    </section>
</div>

@endsection
