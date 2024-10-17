@extends('Santa Cruz.admin')
@section('titulo', 'Detalhes do Evento')
@section('conteudo')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg6.jpg') }}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="font-28 text-white">Event Details 1</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active text-gray-silver">Page Title</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-theme-colored">
        <div class="container pt-40 pb-40">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 id="basic-coupon-clock" class="text-white"></h2>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            // Formato da data de início
                            var dataInicio = "{{ \Carbon\Carbon::parse($evento->data_inicio)->format('Y/m/d H:i:s') }}";

                            $('#basic-coupon-clock').countdown(dataInicio, function(event) {
                                if (event.elapsed) {
                                    // Se a contagem terminar, mostrar uma mensagem ou parar
                                    $(this).html("O evento começou!");
                                    // Aqui você pode adicionar qualquer lógica adicional quando o tempo acabar
                                } else {
                                    $(this).html(event.strftime('%D dias %H:%M:%S Seg'));
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>


    {{-- https://placehold.it/755x480 --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>
                            <h5>Titulo:</h5>
                            <p>{{ $evento->titulo }}</p>
                        </li>
                        <li>
                            <h5>Temas:</h5>
                            <p>{{ $evento->temas }}</p>
                        </li>
                        <li>
                            <h5>Local de Encontro:</h5>
                            <p>{{ $evento->local }}</p>
                        </li>
                        <li>
                            <h5>Ínicio</h5>
                            <p>{{ \Carbon\Carbon::parse($evento->data_inicio)->format('F d, Y, H:m') }}</p>
                        </li>
                        <li>
                            <h5>Encerra</h5>
                            <p>{{ \Carbon\Carbon::parse($evento->data_fim)->format('F d, Y, H:m') }}</p>
                        </li>
                        <li>
                            <h5>Capacidade</h5>
                            <p>{{ $evento->capacidade }} Pessoas</p>
                        </li>
                        <li>
                            <h5>Inscrição</h5>
                            <p>{{ $evento->custo }}</p>
                        </li>
                        <li>
                            <h5>Estado</h5>

                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <img src="https://placehold.it/755x480" alt="">
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-6">
                    <h4 class="mt-0">{{ $evento->titulo }}</h4>
                    <p>{!! $evento->descricao !!}</p>

                </div>
                <div class="col-md-6">
                    <blockquote>
                        <p>Resumo</p>
                        <footer>{!! $evento->resumo !!}</footer>
                    </blockquote>
                    @if ($evento->data_fim < \Carbon\Carbon::now())
                    <button class="btn btn-danger btn-sm mt-10" type="button">Evento
                        encerrado</button>
                    @else
                        @if (!$evento->formandos()->where('formando_id', Auth::id())->exists())
                            <form role="form" action="{{ route('participarEvento', $evento->id) }}" method="POST"
                                id="">
                                @csrf
                                <button class="btn btn-theme-colored btn-sm" type="submit">Marcar Presença</button>
                            </form>
                        @else
                            <form role="form" action="{{ route('RemoverParticipação', $evento->id) }}" method="POST"
                                id="">
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Cancelar Presença</button>
                            </form>
                        @endif
                    @endif

                    <hr>
                    <div>
                        <div class="comments-area">
                            <h2 class="comments-title">Comentários</h2>
                            <ul class="comment-list">
                                @foreach ($evento->comentarios as $item)
                                    <li>
                                        <div class="media comment-author"> <a class="media-left" href="#"><img
                                                    class="media-object img-thumbnail"
                                                    src="{{ asset('LearnPress-Education-Courses/images/blog/comment2.jpg') }}"
                                                    alt=""></a>
                                            <div class="media-body">
                                                <h5 class="media-heading comment-heading">{{ $item->users->name }}</h5>
                                                <div class="comment-date">
                                                    {{ \Carbon\Carbon::parse($evento->created_at)->format('d/m/Y') }}</div>
                                                <p>{{ $item->comentario }}</p>
                                                <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i
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
                                                <a class="btn btn-theme-colored btn-sm" href="{{ route('login') }}">Login</a>
                                            </div>
                                        @endguest
                                        @auth
                                            <form role="form" action="{{ route('comentarios.evento', $evento->id) }}"
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
            <div class="row mt-40">
                <div class="col-md-12">
                    <h4 class="mb-20">Coordenador do Evento</h4>
                    <div class="owl-carousel-6col" data-nav="true">
                        <div class="item">
                            <div class="attorney">
                                <div class="thumb"><img
                                        src="{{ asset('LearnPress-Education-Courses/images/team/1.jpg') }}" alt="">
                                </div>
                                <div class="content text-center">
                                    <h5 class="author mb-0"><a class="text-theme-colored"
                                            href="#">{{ $evento->funcionarios->nome }}</a></h5>
                                    <h6 class="title text-gray font-12 mt-0 mb-0">Formador de
                                        {{ $evento->cursos()->inRandomOrder()->first()->nome }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-20">Participantes</h4>
                    <div class="owl-carousel-5col" data-nav="true">
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('Template admin/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/page/toastr.js') }}"></script>
    @if (session('sucesso'))
        <script>
            $(document).ready(function() {
                iziToast.success({
                    title: 'Sucesso, ',
                    message: '{{ session('sucesso') }}',
                    position: 'topRight'
                });
            });
        </script>
        {{ session()->forget('sucesso') }}
    @endif

    @if (session('erro'))
        <script>
            $(document).ready(function() {
                iziToast.error({
                    title: 'Erro,',
                    message: '{{ session('erro') }}',
                    position: 'topRight'
                });
            });
        </script>
        {{ session()->forget('erro') }}
    @endif

@endsection
