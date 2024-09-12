@extends('layouts.admin')
@section('titulo', 'Actualizar Utilizador')
@section('content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Utilizador --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Utilizador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Utilizador</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('users.update', $user) }}" id="ActualizarForm" method="POST">
                @csrf
                @method('PUT')
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h3>Actualizar Utilizador</h3>
                        <hr>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Nome do
                                        Utilizador</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nivel_acesso">Nível de Acesso</label>
                                    <select class="form-control" name="nivel_acesso" id="nivel_acesso">
                                        <option @if ($user->nivel_acessoc == "Formando") selected @endif value="Formando">Formando</option>
                                        <option @if ($user->nivel_acessoc == "Formador") selected @endif value="Formador">Formador</option>
                                        <option @if ($user->nivel_acessoc == "Administrador") selected @endif value="Administrador">Administrador</option>
                                        <option @if ($user->nivel_acessoc == "Super admin") selected @endif value="Super admin">Super admin</option>
                                    </select>
                                    @error('nivel_acesso')
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
                                <a href="{{ route('users.index') }}"><input type="button" value="Cancelar"
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
@endsection
