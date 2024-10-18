@extends('Santa Cruz.admin')
@section('titulo', 'Detalhes do Post')
@section('conteudo')
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Blog</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="#">ínicio</a></li>
                            <li><a href="#">Post</a></li>
                            <li class="active text-white">Detalhes Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{ "blog/" . $post->imagem }}" alt="{{ $post->titulo }}"
                                        class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div
                                        class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600">
                                                {{ \Carbon\Carbon::parse($post->data_publicacao)->format('d') }}</li>
                                            <li class="font-12 text-white text-uppercase">
                                                {{ \Carbon\Carbon::parse($post->data_publicacao)->format('M') }}</li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h3 class="entry-title text-white text-uppercase pt-0 mt-0">
                                                <a href="#">{{ $post->titulo }}</a>
                                            </h3>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-commenting-o mr-5 text-theme-colored"></i>
                                                {{ $post->comentarios->count() }} Comments
                                            </span>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-heart-o mr-5 text-theme-colored"></i> {{ $post->view }}
                                                Views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">{!! $post->conteudo !!}</p>
                                
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="#" data-bg-color="#3A5795"><i
                                                    class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i
                                                    class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i
                                                    class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span>
                                            @foreach ($post->tags as $item)
                                                <a href="#" class="badge badge-theme-colored">{{ $item->nome }}</a>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right flip">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="comments-area">
                                <h2 class="comments-title">Comentários</h2>
                                <ul class="comment-list">
                                    @foreach ($post->comentarios as $item)
                                        <li>
                                            <div class="media comment-author"> <a class="media-left" href="#"><img
                                                        class="media-object img-thumbnail"
                                                        src="{{ asset('LearnPress-Education-Courses/images/blog/comment2.jpg') }}"
                                                        alt=""></a>
                                                <div class="media-body">
                                                    <h5 class="media-heading comment-heading">{{ $item->users->name }}</h5>
                                                    <div class="comment-date">
                                                        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                                                    </div>
                                                    <p>{{ $item->comentario }}</p>
                                                    <a class="replay-icon pull-right flip text-theme-colored"
                                                        href="#"> <i
                                                            class="fa fa-commenting-o text-theme-colored"></i> Responder</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="comment-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>Deixa Um Comentário</h5>
                                        <div class="row">
                                            @guest
                                                <div class="text-center">
                                                    <h4 class="text-center">Faça Login e deixe Um comentário</h4>
                                                    <a class="btn btn-theme-colored btn-sm"
                                                        href="{{ route('login') }}">Login</a>
                                                </div>
                                            @endguest
                                            @auth
                                                <form role="form" action="{{ route('comentarios.post', $post->id) }}"
                                                    method="POST" id="comment-form">
                                                    @csrf
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" required name="comentario" id="comentario" placeholder="Escreva o seu comentário"
                                                                rows="7"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-dark btn-flat pull-right m-0"
                                                                data-loading-text="Por favor, aguarde...">Comentar</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            @endauth

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Search box</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search"
                                            class="form-control search-input">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn search-button"><i
                                                    class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <li><a href="#">Creative<span>(19)</span></a></li>
                                    <li><a href="#">Portfolio<span>(21)</span></a></li>
                                    <li><a href="#">Fitness<span>(15)</span></a></li>
                                    <li><a href="#">Gym<span>(35)</span></a></li>
                                    <li><a href="#">Personal<span>(16)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                            <div id="flickr-feed" class="clearfix">
                                <!-- Flickr Link -->
                                <script type="text/javascript"
                                    src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
