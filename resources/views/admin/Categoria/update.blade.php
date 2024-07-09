@extends('layouts.admin')
@section('titulo', 'Actualizar Categoria')
@section('content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Categoria --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categoria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Categoria</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('categorias.update', $categoria) }}" id="ActualizarForm" method="POST">
                @csrf
                @method('PUT')
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h3>Actualizar Categoria</h3>
                        <hr>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nome">Descrição da
                                        Categoria</label>
                                    <input class="form-control @error('nome') is-invalid @enderror" type="text"
                                        name="nome" value="{{ $categoria->nome }}">
                                    @error('nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="familia">Família</label>
                                    <select class="form-control @error('familia') is-invalid @enderror" name="familia">
                                        <option value="Curso" @if ($categoria->familia == 'Curso') selected @endif>Curso
                                        </option>
                                        <option value="Eletrônicos" @if ($categoria->familia == 'Eletrônicos') selected @endif>
                                            Eletrônicos</option>
                                        <option value="Livros, Papelaria e Escritório"
                                            @if ($categoria->familia == 'Livros, Papelaria e Escritório') selected @endif>Livros, Papelaria e Escritório
                                        </option>
                                        <option value="Tecnologia da Informação"
                                            @if ($categoria->familia == 'Tecnologia da Informação') selected @endif>Tecnologia da Informação
                                        </option>
                                    </select>
                                    @error('familia')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="descricao">Observações</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao">{{ $categoria->descricao }}</textarea>
                            @error('descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" id="swal-Actualizar"
                                    type="button">Actualizar</button>
                                <a href="{{ route('categorias.index') }}"><input type="button" value="Cancelar"
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
    @endif
@endsection
