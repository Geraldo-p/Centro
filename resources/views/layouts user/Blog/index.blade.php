@extends('layouts.admin')
@section('titulo', 'Blog admin')
@section('css')
@section('content')

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Todos <span class="badge badge-white">10</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rascunho <span class="badge badge-primary">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pendente <span class="badge badge-primary">3</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lixeira <span class="badge badge-primary">0</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Todos os Posts</h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left">
                            <select class="form-control selectric">
                                <option>Ação para Selecionados</option>
                                <option>Mover para Rascunho</option>
                                <option>Mover para Pendente</option>
                                <option>Excluir Permanentemente</option>
                            </select>
                        </div>
                        <div class="float-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix mb-3"></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="pt-2">
                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Autor</th>
                                    <th>Título</th>
                                    <th>Categoria</th>
                                    <th>Criado Em</th>
                                    <th>Visualizações</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($posts as $item)

                                <tr>
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="{{$item->id}}">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img alt="imagem" src="{{ asset('blog/'.$item->imagem)}}"
                                                class="rounded-circle" width="35" data-toggle="title" title="">
                                            <span class="d-inline-block ml-1">{{$item->users->name}}</span>
                                        </a>
                                    </td>
                                    <td>{{$item->titulo}}
                                        <form id="deleteForm-{{ $item->id }}"
                                            action="{{ route('blogs.destroy', $item) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <div class="table-links">
                                                <a {{ route('blogs.show', $item->id) }}>Visualizar</a>
                                                <div class="bullet"></div>
                                                <a href="{{ route('blogs.edit', $item->id) }}">Editar</a>
                                                <div class="bullet"></div>
                                                <a id="swal__{{ $item->id }}" href="#" title="Excluir"
                                                    class="text-danger">Eliminar</a>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        {{$item->categorias->nome}}
                                    </td>
                                    <td>{{$item->data_publicacao}}</td>
                                    <td>{{$item->view}}</td>
                                    @if ($item->data_publicacao > $dataSistema)
                                    <td>
                                        <div class="badge badge-warning">Pendente</div>

                                    </td>
                                    @else
                                    <td>
                                        <div class="badge badge-success">Publicado</div>
                                    </td>
                                    @endif
                                </tr>

                                <script>
                                    document.getElementById("swal__{{ $item->id }}").addEventListener("click", function(event) {
                                        event.preventDefault();
                                        swal({
                                            title: 'Tem certeza?',
                                            text: 'Tem certeza que deseja excluir o Post {{ $item->titulo }}? Esta ação não pode ser desfeita.',
                                            icon: 'warning',
                                            buttons: {
                                                cancel: {
                                                    text: 'Não',
                                                    value: null,
                                                    visible: true,
                                                    className: '',
                                                    closeModal: true,
                                                },
                                                confirm: {
                                                    text: 'Sim',
                                                    value: true,
                                                    visible: true,
                                                    className: '',
                                                    closeModal: false
                                                }
                                            },
                                            dangerMode: true,

                                        }).then((willDelete) => {
                                            if (willDelete) {
                                                document.getElementById('deleteForm-{{ $item->id }}').submit();
                                            } else {
                                                // swal('Exclusão cancelada', {
                                                //     icon: 'info'
                                                // });
                                            }
                                        });
                                    });
                                </script>
                                @endforeach

                            </table>
                        </div>
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Anterior">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Próximo">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Próximo</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex align-items-center">
            <a class="btn btn-primary mr-2" href="{{ route('blogs.create') }}" role="button">+ Novo</a>
            <a class="btn btn-danger" href="{{ route('modulos.pdf') }}" role="button">
                <i class="fas fa-file-pdf"></i> PDF
            </a>
        </div>
    </div>
</section>



@endsection
@section('script')

<script src="{{ asset('Template admin/assets/js/page/posts.js') }}"></script>
@endsection
