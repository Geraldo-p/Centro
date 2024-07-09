@extends('layouts.admin')
@section('titulo', 'Categoria')

@section('content')
    <div class="content-wrapper">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                {{-- Categoria --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categoria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalhes da Categoria</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="border-bottom text-center pb-4">
                                    <h3>{{ $categoria->nome }}</h3>
                                    <div class="d-flex justify-content-between">
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                            Sobre a Categoria
                                        </a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                            Cursos Relacionados a Categoria
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
                                                <h4>Detalhes da Categoria</h4>
                                            </div>
                                        </div>
                                        <div class="profile-feed">
                                            <div class="d-flex align-items-start profile-feed-item">

                                                <div class="form-group col-md-6">
                                                    <strong><i class="fas fa-file-alt"></i>
                                                        Descrição</strong>
                                                    <p class="text-muted">
                                                        {{ $categoria->nome }}
                                                    </p>
                                                    <hr>
                                                    <strong>
                                                        <i class="fas fa-users"></i>

                                                        Família</strong>
                                                    <p class="text-muted">
                                                        {{ $categoria->familia }}
                                                    </p>

                                                    <hr>
                                                </div>

                                                <div class="form-group col-md-6">

                                                    <strong><i class="fas fa-calendar-plus"></i>
                                                        Inserido em</strong>
                                                    <p class="text-muted">
                                                        {{ $categoria->created_at }}

                                                    </p>
                                                    <hr>
                                                    <strong><i class="fas fa-history"></i>
                                                        Ultima Actualização</strong>
                                                    <p class="text-muted">
                                                        {{ $categoria->updated_at }}

                                                    </p>
                                                    <hr>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-12">
                                                <strong><i class="fas fa-comments"></i>
                                                    Observações</strong>
                                                <p class="text-muted">
                                                    {{ $categoria->descricao }}
                                                </p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" user="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Historial de compras</h4>
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
                                                                <td colspan="2"><strong>Total de Cursos Associados:
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
                        <a href="{{ route('categorias.index') }}" class="btn btn-primary float-right">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
