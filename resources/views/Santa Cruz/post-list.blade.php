@extends('Santa Cruz.admin')
@section('titulo', 'Blog')
@section('conteudo')
    <section class="inner-header divider parallax layer-overlay overlay-dark-8"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Blog</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="#">Ínicio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="active text-white">Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">
                                @forelse ($posts as $item)
                                    <article class="post clearfix mb-30 pb-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img src="{{ 'blog/' . $item->imagem ?? 'https://placehold.it/900x450' }}"
                                                    alt="{{ $item->titulo }}" class="img-responsive img-fullwidth">
                                            </div>
                                        </div>
                                        <div class="entry-content border-1px p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div
                                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600">
                                                            {{ \Carbon\Carbon::parse($item->data_publicacao)->format('d') }}
                                                        </li>
                                                        <li class="font-12 text-white text-uppercase">
                                                            {{ \Carbon\Carbon::parse($item->data_publicacao)->format('M') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                                            <a
                                                                href="{{ route('post_detalhes', $item->id) }}">{{ $item->titulo }}</a>
                                                        </h4>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                            <i class="fa fa-commenting-o mr-5 text-theme-colored"></i>
                                                            {{ $item->comentarios->count() ?? 0 }} Comments
                                                        </span>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                            <i class="fa fa-heart-o mr-5 text-theme-colored"></i>
                                                            {{ $item->likes_count ?? 0 }} Likes
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">{!! Str::limit($item->resumo, 150) !!}</p>
                                            <a href="{{ route('post_detalhes', $item->id) }}" class="btn-read-more">Ler
                                                Mais</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                @empty
                                    <p class="text-center">Nenhum post encontrado no momento. Por favor, volte mais tarde!
                                    </p>
                                @endforelse

                            </div>
                        </div>
                        <div class="col-md-12">
                            <nav>
                                <ul class="pagination">
                                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Categoria</h5>
                            <ul class="list-divider list-border list check">
                                @foreach ($categorias as $item)
                                    @if ($item->blogs->isNotEmpty())
                                        <li><a href="#">{{ $item->nome }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <h5 class="widget-title line-bottom">Cursos Populares</h5>
                            <div class="widget-image-carousel">
                                <div class="item">
                                    @forelse ($cursosComMaisPagamentos as $item)
                                        <img src="https://placehold.it/365x230" alt="">
                                        <h4 class="title">{{ $item->nome }}</h4>
                                        <p>
                                            {{ Str::limit($item->descricao, 40) }}
                                        </p>
                                    @empty
                                        <h5 class="text-center">Nenhum Curso de Momento</h5>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Tags</h5>
                            <div class="tags">
                                @foreach ($tags as $item)
                                    <a href="#">{{ $item->nome }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
