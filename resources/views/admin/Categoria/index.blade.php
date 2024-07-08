@extends('layouts.admin')
@section('titulo', 'Categoria')
@section('content')
    @if (session('sucesso'))
        <div id="alerta" class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('sucesso') }}
            </div>
        </div>
    @endif
    @if (session('erro'))
        <div id="alerta" class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('erro') }}
            </div>
        </div>
    @endif
    <section class="section">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                Categoria
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabela de Categorias</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th>Família da categoria</th>
                                        <th>Inserido por</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $item)
                                        <tr>
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->familia }}</td>
                                            <td>{{ $item->nome }}</td>
                                            {{-- <td>{{ $item->user->name }}</td> --}}
                                            <td>
                                                <form id="deleteForm" action="{{ route('categorias.excluir', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div>
                                                        <a href="{{ route('categorias.editar', $item) }}"
                                                            class="btn btn-primary"><i class="fas fa-edit    "></i></a>

                                                        <a href="#" class="btn btn-danger"><i
                                                                class="fas fa-window-close    " id="swal-6"></i></a>

                                                        <a href="{{ route('categorias.show', $item) }}"
                                                            class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h4><a name="" id="" class="btn btn-primary" href="{{ route('categorias.create') }}"
                        role="button">+ Novo</a></h4>
            </div>
        </div>
    </section>

    <script>
        setTimeout(function() {
            document.getElementById('alerta').classList.remove('show');
        }, 5000);
    </script>
@endsection
