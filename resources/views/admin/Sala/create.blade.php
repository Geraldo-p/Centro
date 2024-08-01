@extends('layouts.admin')
@section('titulo', 'Nova Sala')
@section('css')
    <style>
        .photo-frame {
            border: 1px solid rgb(0, 0, 0);
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
                <li class="breadcrumb-item"><a href="{{ route('salas.index') }}">Sala</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nova Sala</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('salas.store') }}" method="POST" id="InserirForm" enctype="multipart/form-data">
                @csrf
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h3>Nova Sala</h3>
                        <hr />
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="descricao">Descrição da
                                        Sala</label>
                                    <input class="form-control @error('descricao') is-invalid @enderror" type="text"
                                        name="descricao" />

                                    @error('descricao')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tipo">Tipo de Sala</label>
                                    <select class="form-control @error('tipo') is-invalid @enderror" name="tipo">
                                        <optgroup label="Selecione o Tipo da Sala">
                                                <option selected value="Teórico - Prático">Teórico - Prático</option>
                                                <option value="Teórica">Teórica</option>
                                                <option value="Prática">Prática</option>
                                        </optgroup>
                                    </select>
                                    @error('tipo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-2">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="capacidade">Qtd.
                                        Lições</label>
                                    <input class="form-control @error('capacidade') is-invalid @enderror" type="number"
                                        name="capacidade" inputmode="numeric" />
                                    @error('capacidade')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="button" id="swal-inserir">Guardar</button>
                                <a href="{{ route('salas.index') }}"><input type="button" value="Cancelar"
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
