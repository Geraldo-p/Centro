@extends('Santa Cruz.admin')
@section('titulo', 'Eventos')
@section('conteudo')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg6.jpg') }}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Eventos</h3>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="#">Ínicio</a></li>
                                <li><a href="#">Eventos</a></li>
                                {{-- <li class="active text-gray-silver">Page Title</li> --}}
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: event calendar -->
    <section>
        <div class="container">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($eventos as $evento)
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="schedule-box maxwidth500 bg-light mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="{{ $evento->titulo }}"
                                        src="{{ 'Evento/' . $evento->imagem }}">
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                                    </div>
                                </div>
                                <div class="schedule-details clearfix p-15 pt-10">
                                    <h5 class="font-16 title"><a href="#">{{ $evento->titulo }}</a></h5>
                                    <ul class="list-inline font-11 mb-20">
                                        <li><i class="fa fa-calendar mr-5"></i>
                                            {{ \Carbon\Carbon::parse($evento->data)->format('d M/Y') }}</li>
                                        <li><i class="fa fa-map-marker mr-5"></i> {{ $evento->local }}</li>
                                    </ul>
                                    <p>{!! Str::limit($evento->resumo, 100) !!}</p>
                                    <div class="mt-10">
                                        @if ($evento->data_fim < \Carbon\Carbon::now())
                                            <button class="btn btn-danger btn-sm mt-10" type="button">Evento
                                                encerrado</button>
                                        @else
                                            @if (!$evento->formandos()->where('formando_id', Auth::id())->exists())
                                                <form role="form" action="{{ route('participarEvento', $evento->id) }}"
                                                    method="POST" id="">
                                                    @csrf
                                                    <button class="btn btn-theme-colored btn-sm mt-10" type="submit">Marcar
                                                        Presença</button>
                                                    <a href="{{ route('evento_detalhes', $evento->id) }}"
                                                        class="btn btn-dark btn-sm mt-10">Detalhes</a>
                                                </form>
                                            @else
                                                <form role="form"
                                                    action="{{ route('RemoverParticipação', $evento->id) }}" method="POST"
                                                    id="">
                                                    @csrf
                                                    <button class="btn btn-warning btn-sm mt-10" type="submit">Cancelar
                                                        Presença</button>
                                                    <a href="{{ route('evento_detalhes', $evento->id) }}"
                                                        class="btn btn-dark btn-sm mt-10">Detalhes</a>
                                                </form>
                                            @endif
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <ul class="pagination pull-right xs-pull-center mb-xs-40">
                                {{ $eventos->links() }} <!-- Gera os links de paginação -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
