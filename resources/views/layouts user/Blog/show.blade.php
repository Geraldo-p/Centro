@extends('layouts user.admin')
@section('titulo', 'Blog - Detalhes')
@section('conteudo')

    <div class="iner_banner">
        <div class="container">
            <h5>Blog - Detalhes</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">ínicio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Blog - Detalhes</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="iq_content_wrap">
        <section>
            <div class="blog1_detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog_detail_page">
                                <figure>
                                    <img src="{{ asset('blog/' . $blog->imagem) }}" alt="">
                                </figure>
                                <div class="iq_heading_1 text-left">
                                    <h4>{{ $blog->titulo }}</h4>
                                </div>

                                <ul class="blog_detail_navi">
                                    <li>
                                        <a
                                            href="#">{{ \Carbon\Carbon::parse($blog->data_publicacao)->format('F d, Y') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">Destino, {{ $blog->categorias->nome }}</a>
                                    </li>
                                    <li>
                                        <a href="#">By {{ $blog->users->name }}</a>
                                    </li>
                                </ul>
                                <p>{!! $blog->conteudo !!}</p>
                                <div class="blog_quotes">
                                    <ul>
                                        <li><span>January 09, 2015</span><small>In Quotes</small></li>
                                    </ul>
                                    <p>“ Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor,
                                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                        nibh vulputate cursus a sit amet mauris.” </p>
                                    <span>-Jonathan Doe</span>
                                </div>
                                <div class="blog_quotes_prgh">
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                                        non mauris vitae er auctor eu in elit. Class aptent taci ti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos.</p>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                                        mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare
                                        odio. Sed non mauris vitae eraodio. Sed non mauris vitae eraodio. Sed non mauris
                                        vitae erat .</p>
                                </div>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                                    litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam
                                    ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut
                                    imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum
                                    feugiat .</p>
                            </div>
                            <div class="tags_wrap">
                                <ul class="iq-tags">
                                    @forelse ($blog->tags as $tag)
                                        <li><a href="#">{{ $tag->nome }}</a></li>
                                    @empty
                                        <h6>Nenhuma Tag</h6>
                                    @endforelse
                                </ul>
                                <ul class="iq_footer_social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-rss"></a></li>
                                </ul>
                            </div>
                            <div class="blog_commenting">
                                <div class="detail_searh_heading commenting">
                                    <div class="iq_heading_1 text-left">
                                        <h4>Comentários : <span>{{ $blog->comentarios->count() }}</span></h4>
                                    </div>
                                </div>
                                <ul class="blog_commenting_area">
                                    @forelse ($blog->comentarios as $item)
                                        <li>
                                            <div class="comment-thumb">
                                                <figure>
                                                    <img src="{{ asset('Template user/extra-images/comment-thumb.jpg') }}"
                                                        alt="">
                                                </figure>
                                                <div class="comment_caption">
                                                    <div class="comment_caption-2">
                                                        <span>
                                                            <strong>
                                                                {{ $item->users->name }}
                                                            </strong>
                                                            <small>{{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}</small>
                                                        </span>
                                                        {{-- <a class="comment-reply" href="#">Responder</a> --}}
                                                    </div>
                                                    <div class="comment-reply-2">
                                                        <p>{{ $item->comentario }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <h6>Nenhum Comentário de Momento</h6>
                                    @endforelse
                                </ul>
                            </div>
                            <div class="blog_detail_searh">
                                <div class="detail_searh_heading">
                                    <div class="iq_heading_1 text-left">
                                        <h4>Deixe Um <span>Comentário</span></h4>
                                    </div>
                                </div>
                                <form action="{{ route('comentarios.store', $blog->id) }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12 col-sm-12">
                                            <div class="iq-input">
                                                <textarea placeholder="Comentário" name="comentario"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            @auth
                                                <input class="iq_link_1" type="submit" value="Comentar">
                                            @endauth
                                            @guest
                                                <a href="{{ route('login') }}" class="iq_link_1" type="button">Faça Login Para
                                                    Comentar</a>
                                            @endguest
                                        </div>

                                    </div>
                                </form>

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
                                <!--course_inrp_side_search end-->
                                <!--coures_archives start-->
                                <div class="widget widget_archive">
                                    <!--Widget Title Start-->
                                    <h5 class="widget-title"><span>Nossos</span> Cursos</h5>
                                    <!--Widget Title End-->
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
                            </div>
                            <div class="widget widget-tag">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>tags</span></h5>
                                <!--Widget Title End-->
                                <div class="tag">
                                    @forelse ($tags as $item)
                                        <a class="tag-link" href="#">{{ $item->nome }}</a>

                                    @empty
                                        <h6>Nenhuma Tag</h6>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--BLOG1 PAGE END-->
        </section>
    </div>

@endsection
