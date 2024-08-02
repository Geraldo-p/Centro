@extends('layouts.admin')
@section('titulo', 'Actualizar Turma')
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
                <li class="breadcrumb-item"><a href="{{ route('turmas.index') }}">Turma</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Turma</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('turmas.update', $turma) }}" method="POST" id="ActualizarForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Actualizar Turma</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="form-group mb-3">
                            <label class="form-label" for="nome">Descrição da
                                Turma</label>
                            <input value="{{ $turma->nome }}" class="form-control @error('nome') is-invalid @enderror"
                                type="text" name="nome" />

                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group mb-3">
                            <label class="form-label" for="sala_id">Sala</label>
                            <select class="form-control @error('sala_id') is-invalid @enderror" name="sala_id">
                                <optgroup label="Selecione a Sala">
                                    @foreach ($salas as $item)
                                        <option @if ($item->id == $turma->sala_id) selected @endif
                                            value="{{ $item->id }}">{{ $item->descricao }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('sala_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="form-group mb-3">
                            <label class="form-label" for="funcionario_id">Formador</label>
                            <select class="form-control @error('funcionario_id') is-invalid @enderror"
                                name="funcionario_id">
                                <optgroup label="Selecione o Formador">
                                    @foreach ($formadores as $item)
                                        <option @if ($item->id == $turma->funcionario_id) selected @endif
                                            value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('funcionario_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="horario_ENTRADA">Hora de Entrada</label>
                            <input value="{{ $turma->horario_ENTRADA }}"
                                class="form-control @error('horario_ENTRADA') is-invalid @enderror" type="time"
                                name="horario_ENTRADA" />

                            @error('horario_ENTRADA')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="horario_SAIDA">Hora de Saída</label>
                            <input value="{{ $turma->horario_SAIDA }}"
                                class="form-control @error('horario_SAIDA') is-invalid @enderror" type="time"
                                name="horario_SAIDA" />

                            @error('horario_SAIDA')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 content-right">
                        <button class="btn btn-primary form-btn" type="button" id="swal-Actualizar">Actualizar</button>
                        <a href="{{ route('turmas.index') }}"><input type="button" value="Cancelar"
                                class="btn btn-danger form-btn"></a>
                    </div>
                </div>
        </div>
    </div>
    </form>
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
