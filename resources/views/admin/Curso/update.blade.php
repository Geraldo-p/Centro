@extends('layouts.admin')
@section('titulo', 'Actualizar Curso')
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
                <li class="breadcrumb-item"><a href="{{ route('cursos.index') }}">Curso</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Curso</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('cursos.update', $curso) }}" method="POST" id="InserirForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Actualizar Curso</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-4 relative">
                        <div class="row justify-content-center mt-5">
                            <div class="photo-frame" id="photoFrame">
                                @if ($curso->foto)
                                    <img src="{{ asset('images/' . $curso->foto) }}" alt="Foto do Curso">
                                @else
                                    <span>Foto</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <input class="form-control form-control" type="file" name="foto" id="fotoInput"
                            accept="image/*">
                        <input type="hidden" name="foto2" value="{{ $curso->foto }}">
                        <br>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nome">Descrição</label>
                                    <input class="form-control @error('nome') is-invalid @enderror" type="text"
                                        name="nome" id="nome" value="{{ $curso->nome }}">
                                    @error('nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select class="form-control @error('id_categ') is-invalid @enderror" name="id_categ">
                                        <optgroup label="Escolha uma Categoria para o curso">
                                            @foreach ($categoria as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == $curso->id_categ) selected @endif>{{ $item->nome }}
                                                </option>
                                            @endforeach
                                        </optgroup>

                                    </select>
                                    @error('id_categ')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="duracao">Duração</label>
                                    <input class="form-control @error('duracao') is-invalid @enderror" type="text"
                                        name="duracao" autocomplete="on" required="" value="{{ $curso->duracao }}">
                                    @error('duracao')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="preco">Preço de
                                        Inscrição</label>
                                    <input class="form-control preco @error('preco') is-invalid @enderror" type="number"
                                        name="preco" autocomplete="off" required="" value="{{ $curso->preco }}">
                                    @error('preco')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="pag_mes">Pagamento
                                        Mensal</label>
                                    <input class="form-control @error('pag_mes') is-invalid @enderror" type="number"
                                        name="pag_mes" autocomplete="off" required="" value="{{ $curso->pag_mes }}">
                                    @error('pag_mes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="data_inicio">Data de
                                        Início</label>
                                    <input class="form-control @error('data_inicio') is-invalid @enderror" type="date"
                                        name="data_inicio" value="{{ $curso->data_inicio }}">
                                    @error('data_inicio')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="data_fim">Data de
                                        Término</label>
                                    <input class="form-control @error('data_fim') is-invalid @enderror" type="date"
                                        name="data_fim" value="{{ $curso->data_fim }}">
                                    @error('data_fim')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="descricao">Mais
                                        Informações</label>
                                    <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao">{{ $curso->descricao }}</textarea>
                                    @error('descricao')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="button"
                                    id="swal-inserir">Actualizar</button>
                                <a href="{{ route('cursos.index') }}"><input type="button" value="Cancelar"
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
