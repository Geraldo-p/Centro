@extends('layouts.admin')
@section('titulo', 'Actualizar Módulo')
@section('css')
    <style>
        .photo-frame {
            border: 0px solid black;
            width: 300px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .photo-frame img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
@endsection
@section('content')

    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Categoria --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('modulos.index') }}">Módulo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Módulo</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('modulos.update', $modulo) }}" method="POST" id="ActualizarForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Actualizar Módulo</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="nome">Descrição do
                                Módulo</label>
                            <input class="form-control @error('nome') is-invalid @enderror" type="text"
                                value="{{ $modulo->nome }}" name="nome" />

                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="curso_id">Curso
                                Associado</label>
                            <select class="form-control @error('curso_id') is-invalid @enderror" name="curso_id">
                                <optgroup label="Selecione o curso associado">
                                    @foreach ($cursos as $item)
                                        <option @if ($item->id == $modulo->curso_id) selected @endif
                                            value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('curso_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="qtd_licoes">Qtd.
                                Lições</label>
                            <input class="form-control @error('qtd_licoes') is-invalid @enderror" type="number"
                                name="qtd_licoes" inputmode="numeric" value="{{ $modulo->qtd_licoes }}" />
                            @error('qtd_licoes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <div class="form-group mb-3">
                            <label class="form-label" for="data_inicio">Data de
                                Início</label>
                            <input class="form-control @error('data_inicio') is-invalid @enderror" type="date"
                                name="data_inicio" value="{{ $modulo->data_inicio }}" />
                            @error('data_inicio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <div class="form-group mb-3">
                            <label class="form-label" for="data_fim">Data de
                                Término</label>
                            <input class="form-control @error('data_fim') is-invalid @enderror" type="date"
                                name="data_fim" value="{{ $modulo->data_fim }}" />
                            @error('data_fim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="descricao">Observações</label>
                    <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao">{{ $modulo->descricao }}</textarea>
                    @error('descricao')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12 content-right">
                        <button class="btn btn-primary form-btn" type="button" id="swal-Actualizar">Actualizar</button>
                        <a href="{{ route('modulos.index') }}"><input type="button" value="Cancelar"
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

    <script>
        document.getElementById('fotoInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const photoFrame = document.getElementById('photoFrame');
                    photoFrame.innerHTML = ''; // Clear the frame
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    photoFrame.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

@endsection
