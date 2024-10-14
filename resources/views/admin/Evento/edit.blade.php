@extends('layouts.admin')
@section('titulo', 'Actualizar Evento')
@section('css')
    <link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Template admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/components.css') }}">

@endsection


@section('content')

    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Evento --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('eventos.index') }}">Evento</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Evento</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('eventos.update', $evento) }}" id="ActualizarForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h3>Actualizar Evento</h3>
                        <hr>
                        <div class="row">

                            <div class="col-sm-12 col-md-6 col-lg-9 col-xl-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="titulo">Título</label>
                                    <input class="form-control @error('titulo') is-invalid @enderror" type="text"
                                        name="titulo" value="{{$evento->titulo}}"/>
                                    @error('titulo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="data_inicio">
                                        Data e Hora de
                                        Ínicio</label>
                                    <input class="form-control @error('data_inicio') is-invalid @enderror"
                                        name="data_inicio" type="datetime-local" value="{{$evento->data_inicio}}"/>
                                    @error('data_inicio')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="data_fim">Data e Hora de
                                        Término</label>

                                    <input class="form-control @error('data_fim') is-invalid @enderror" name="data_fim"
                                        type="datetime-local" value="{{$evento->data_fim}}"/>
                                    @error('data_fim')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="local">Local de
                                        Encontro</label>
                                    <input class="form-control @error('local') is-invalid @enderror" type="text"
                                        name="local" value="{{$evento->local}}"/>
                                    @error('local')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-4">
                                <div class="form-group mb-3"><label class="form-label" for="tipo_evento">Tipo de
                                        Evento</label>
                                    <select class="form-select @error('tipo_evento') is-invalid @enderror"
                                        name="tipo_evento">
                                        <option value="Estudantil" selected>Estudantil</option>
                                    </select>
                                    @error('tipo_evento')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group mb-3"><label class="form-label" for="capacidade">Capacidade de
                                        Pessoas </label>
                                    <input class="form-control @error('capacidade') is-invalid @enderror" type="text"
                                        name="capacidade" value="{{$evento->capacidade}}"/>
                                    @error('capacidade')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group mb-3"><label class="form-label" for="temas">Temas</label>
                                    <input type="text" placeholder="separe por virgula os temas"
                                        class="form-control inputtags @error('temas') is-invalid @enderror" name="temas" value="{{$evento->temas}}">

                                    @error('temas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group mb-3"><label class="form-label" for="custo">Preço </label>
                                    <input class="form-control @error('custo') is-invalid @enderror" type="number"
                                        name="custo" value="{{$evento->custo}}"/>
                                    @error('custo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                <div class="form-group mb-3"><label class="form-label" for="status">Estado</label>
                                    <select class="form-select @error('status') is-invalid @enderror" name="status">
                                        <option value="Agendado" @if ($evento->status === "Agendado") selected @endif>Agendado</option>
                                        <option value="Concluído" @if ($evento->status === "Concluído") selected @endif>Concluído</option>
                                        <option value="Cancelado" @if ($evento->status === "Cancelado") selected @endif>Cancelado</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-5">
                                <div class="form-group mb-3"><label class="form-label" for="funcionario_id">Coordenador
                                        do Evento</label><select
                                        class="form-select @error('funcionario_id') is-invalid @enderror"
                                        name="funcionario_id">
                                        @foreach ($funcionarios as $item)
                                            <option value="{{ $item->id }}" @if ($evento->funcionario_id === $item->id) selected @endif>{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('funcionario_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="form-group mb-3">
                                    <div id="image-preview" class="image-preview @error('foto') is-invalid @enderror">
                                        <label for="image-upload" id="image-label">Escolher Arquivo</label>
                                        <input type="file" name="foto" id="image-upload" value={{$evento->imagem}}/>

                                        @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-9">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="resumo">Resumo </label>
                                    <textarea class="summernote-simple @error('resumo') is-invalid
                                    @enderror"
                                        name="resumo" maxlength="376">{{$evento->resumo}}</textarea>
                                    <label for="">376 caracteres restantes</label>
                                    @error('resumo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="descricao">Descrição Completa </label>
                                    <textarea class="summernote-simple @error('descricao') is-invalid
                                    @enderror"
                                        name="descricao" maxlength="376">{{$evento->descricao}}</textarea>
                                    @error('descricao')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" id="swal-Actualizar"
                                    type="button">Actualizar</button>
                                <a href="{{ route('eventos.index') }}"><input type="button" value="Cancelar"
                                        class="btn btn-danger form-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <!-- JS Libraies -->
    <script src="{{ asset('Template admin/assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('Template admin/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}">
    </script>
    <script src="{{ asset('Template admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}">
    </script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('Template admin/assets/js/page/create-post.js') }}"></script>

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

    {{-- <script>
        // Se já houver uma imagem, definir o caminho da imagem no preview
        @if ($evento->imagem)
            $('#image-preview').html('<img src="{{ asset('Evento/' . $evento->imagem) }}">');
        @endif
    
    </script> --}}
@endsection
