@extends('layouts.admin')
@section('titulo', 'Actualizar Departamento')
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
                <li class="breadcrumb-item"><a href="{{ route('departamentos.index') }}">Departamento</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Departamento</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST" id="ActualizarForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h3>Actualizar Departamento</h3>
                        <hr />
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-8">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nome">Descrição do
                                        Departamento</label>
                                    <input class="form-control @error('nome') is-invalid @enderror" type="text"
                                        name="nome" value="{{ $departamento->nome }}" />
                                    @error('nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-2">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="hora_entrada">Hora de
                                        Entrada</label>
                                    <input class="form-control @error('hora_entrada') is-invalid @enderror" type="time"
                                        name="hora_entrada" value="{{ $departamento->hora_entrada }}" />
                                    @error('hora_entrada')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-2">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="hora_fechamento">Hora de
                                        Fechar</label>
                                    <input class="form-control @error('hora_fechamento') is-invalid @enderror"
                                        type="time" name="hora_fechamento"
                                        value="{{ $departamento->hora_fechamento }}" />
                                    @error('hora_fechamento')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="descricao">Observações</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao">{{ $departamento->descricao }}</textarea>
                            @error('descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="button"
                                    id="swal-Actualizar">Actualizar</button>
                                <a href="{{ route('departamentos.index') }}"><input type="button" value="Cancelar"
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
