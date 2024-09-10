@extends('layouts.admin')
@section('titulo', 'Detalhes Curso')
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
                {{-- Curso --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cursos.index') }}">Curso</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalhes do Curso</li>
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
                                        @if ($curso->foto)
                                            <img src="{{ asset('images/' . $curso->foto) }}" alt="Foto do Curso">
                                        @else
                                            <span>Foto</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="border-bottom text-center pb-4">


                                    <h3>{{ $curso->nome }}</h3>
                                    <div class="d-flex justify-content-between">
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                            Sobre o Curso
                                        </a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                            Cursos Relacionados
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
                                                <h4>Detalhes do Curso</h4>
                                            </div>
                                        </div>
                                        <div class="profile-feed">
                                            <div class="d-flex align-items-start profile-feed-item">

                                                <div class="form-group col-md-6">
                                                    <strong><i class="fas fa-file-alt"></i>
                                                        Descrição</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->nome }}
                                                    </p>
                                                    <hr>
                                                    <strong>
                                                        <i class="fas fa-users"></i>

                                                        Categoria</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->categorias->nome }}
                                                    </p>
                                                    <strong><i class="fas fa-calendar" aria-hidden="true"></i>
                                                        Data de Inicio</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->data_inicio }}
                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-calendar" aria-hidden="true"></i>
                                                        Data de Término</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->data_fim }}
                                                    </p>
                                                    <hr>
                                                </div>

                                                <div class="form-group col-md-6">

                                                    <strong><i class="fas fa-calendar-plus"></i>
                                                        Duração</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->duracao }}

                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-history"></i>
                                                        Preço de Inscrição</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->preco }} kz

                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-money-bill    "></i>
                                                        Pagamento Mensal</strong>
                                                    <p class="text-muted">
                                                        {{ $curso->pag_mes }} kz
                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-calendar" aria-hidden="true"></i>
                                                        Estado</strong>
                                                    <p class="text-muted">
                                                        @if (\Carbon\Carbon::parse($curso->data_fim)->isFuture())

                                                        <label for="" class="btn btn-success">Inscrições Abertas...</label>

                                                     @else
                                                        <label for="" class="btn btn-danger"> Inscrição Encerrada</label>
                                                     @endif
                                                    </p>
                                                    <hr>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-12">
                                                <strong><i class="fas fa-comments"></i>
                                                    Observações</strong>
                                                <p class="text-muted">
                                                    {{ $curso->descricao }}
                                                </p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" user="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Cursos Relacionados</h4>
                                            </div>
                                        </div>
                                        <div class="profile-feed">
                                            <div class="d-flex align-items-start profile-feed-item">

                                                <div class="table-responsive">
                                                    <table id="order-listing" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Fecha</th>
                                                                <th>Total</th>
                                                                <th>Estado</th>
                                                                <th style="width:50px;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- @foreach ($client->sales as $sale) --}}
                                                            <tr>
                                                                <th scope="row">
                                                                    <a href="">22</a>
                                                                </th>
                                                                <td>fffff</td>
                                                                <td>ffffff</td>

                                                                {{-- @if (true)
                                                            <td>
                                                                <a class="jsgrid-button btn btn-success" href="" title="Editar">
                                                                    Activo <i class="fas fa-check"></i>
                                                                </a>
                                                            </td>
                                                            @else
                                                            <td>
                                                                <a class="jsgrid-button btn btn-danger" href="" title="Editar">
                                                                    Cancelado <i class="fas fa-times"></i>
                                                                </a>
                                                            </td>
                                                            @endif --}}
                                                                <td style="width: 50px;">

                                                                    <a href=""
                                                                        class="jsgrid-button jsgrid-edit-button"><i
                                                                            class="far fa-file-pdf"></i></a>
                                                                    {{--  <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a>  --}}
                                                                    <a href=""
                                                                        class="jsgrid-button jsgrid-edit-button"><i
                                                                            class="far fa-eye"></i></a>
                                                                </td>
                                                            </tr>
                                                            {{-- @endforeach --}}
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="2"><strong>Total de Cursos Relacionados:
                                                                    </strong></td>
                                                                <td colspan="3" align="left"><strong>s/</strong></td>
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

@endsection
