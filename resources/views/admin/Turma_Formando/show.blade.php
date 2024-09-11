@extends('layouts.admin')
@section('titulo', 'Detalhes Turma')
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
    <div class="content-wrapper">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                {{-- Turma --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cursos.index') }}">Turma</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalhes da Turma</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row justify-content-center mt-5">
                                    <div class="photo-frame" id="photoFrame">
                                        @if ($turma->foto)
                                            <img src="{{ asset('images/' . $turma->foto) }}" alt="Foto do Turma">
                                        @else
                                            <span>Foto</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="border-bottom text-center pb-4">


                                    <h3>{{ $turma->nome }}</h3>
                                    <div class="d-flex justify-content-between">
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                            Sobre a Turma
                                        </a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                            Formandos na Turma
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 pl-lg-5">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" user="tabpanel"
                                        aria-labelledby="list-home-list">

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Detalhes do Turma</h4>
                                            </div>
                                        </div>
                                        <div class="profile-feed">
                                            <div class="d-flex align-items-start profile-feed-item">

                                                <div class="form-group col-md-6">
                                                    <strong><i class="fas fa-file-alt"></i> Nome da Turma</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->nome }}
                                                    </p>
                                                    <hr>

                                                    <strong><i class="fas fa-chalkboard"></i> Sala</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->salas->descricao }}
                                                    </p>
                                                    <hr>

                                                    <strong><i class="fas fa-user-tie"></i> Formador</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->funcionarios->nome }}
                                                    </p>
                                                    <hr>

                                                    <strong><i class="fas fa-clock"></i> Horário de Entrada</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->horario_ENTRADA }}
                                                    </p>
                                                    <hr>


                                                </div>

                                                <div class="form-group col-md-6">
                                                    <strong><i class="fas fa-tasks"></i> Status</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->status }}
                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-chalkboard"></i> Sala</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->salas->descricao }} (Capacidade:
                                                        {{ $turma->salas->capacidade }})
                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-user"></i>Turma add Por</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->users->name }}
                                                    </p>
                                                    <hr>

                                                    <strong><i class="fas fa-clock"></i> Horário de Saída</strong>
                                                    <p class="text-muted">
                                                        {{ $turma->horario_SAIDA }}
                                                    </p>
                                                    <hr>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="list-profile" user="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Formando na Turma</h4>
                                            </div>
                                        </div>
                                        <div class="profile-feed">
                                            <div class="d-flex align-items-start profile-feed-item">

                                                <div class="table-responsive">
                                                    <table id="order-listing" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nª</th>
                                                                <th>Nome Completo</th>
                                                                <th>Tel.</th>
                                                                <th>Sala</th>
                                                                <th style="width:50px;">Acção</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($formandos as $item)
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="">{{ $item->id }}</a>
                                                                    </th>
                                                                    <td>{{ $item->nome }}</td>
                                                                    <td>{{ $item->contactos->telefone }}</td>
                                                                    <td>{{ $turma->salas->descricao }}</td>
                                                                    <td style="width: 50px;">
                                                                        <a
                                                                            href="{{ route('turma_formandos.destroy', $turma->id) }}">Eliminar</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4"><strong>Total de Formandos na Turma:
                                                                    </strong></td>
                                                                <td colspan="3" align="left">
                                                                    <strong>{{ $turma->count() }}</strong>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route('cursos.index') }}" class="btn btn-primary float-right">Voltar</a>
                    </div>
                </div>
            </div>
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
                    title: 'Sucesso',
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
                    title: 'Erro',
                    message: '{{ session('erro') }}',
                    position: 'topRight'
                });
            });
        </script>
        {{ session()->forget('erro') }}
    @endif

    @if (session('warning'))
        <script>
            $(document).ready(function() {
                iziToast.warning({
                    title: 'Atenção',
                    message: '{{ session('warning') }}',
                    position: 'topRight'
                });
            });
        </script>
        {{ session()->forget('warning') }}
    @endif
@endsection
