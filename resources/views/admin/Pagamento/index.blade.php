@extends('layouts.admin')
@section('titulo', 'Pagamento')


@section('content')
    <section class="section">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                {{-- Pagamento --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pagamento</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabela de Pagamento</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Código/Formando</th>
                                        <th>Data/Pagamento</th>
                                        <th>Valor Pago</th>
                                        <th>Em Falta</th>
                                        <th>Estado</th>
                                        <th>Atendido Por</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagamentos as $item)
                                        <tr>
                                            <td>{{ $item->formandos->num_formando }}</td>
                                            <td>{{ $item->data_pagamento }}</td>
                                            <td>{{ $item->valor }}</td>
                                            <td>{{ $item->em_falta }}</td>
                                            <td><strong>{{ $item->estado }}</strong></td>
                                            <td>{{ $item->users->name }}</td>
                                            <td>
                                                <form id="deleteForm-{{ $item->id }}"
                                                    action="{{ route('pagamentos.destroy', $item) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div>
                                                        <a href="{{ route('pagamentos.edit', $item->id) }}"
                                                            title="Actualizar" class="btn btn-primary"><i
                                                                class="fas fa-edit    "></i></a>

                                                        <a id="swal__{{ $item->id }}" href="#" title="Actualizar"
                                                            title="Excluir" class="btn btn-danger"><i
                                                                class="fas fa-window-close"></i></a>

                                                        <a href="{{ route('pagamentos.show', $item->id) }}"
                                                            title="Detalhes" class="btn btn-warning"><i
                                                                class="fas fa-eye"></i></a>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <script>
                                            document.getElementById("swal__{{ $item->id }}").addEventListener("click", function(event) {
                                                event.preventDefault();
                                                swal({
                                                    title: 'Tem certeza?',
                                                    text: 'Tem certeza que deseja excluir o pagamento {{ $item->nome }}? Esta ação não pode ser desfeita.',
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
                                                        
                                                    }
                                                });
                                            });
                                        </script>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex align-items-center">
                <h4 class="mb-0">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter">Registrar Pagamento</button>

                </h4>
                <h4 class="mb-0">
                    <a name="" id="" class="btn btn-danger" href="" role="button"><i
                            class="fas fa-file-pdf    "></i> PDF</a>
                </h4>
            </div>
        </div>
    </section>
    <!-- Modal Vertically Center -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Formando</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <center>
                            <form action="{{ route('pagamentos.pesquisar') }}" method="post">
                                @csrf <!-- Token CSRF para proteção -->
                                <label for="cod">Código do Formando</label>
                                <input type="text" class="form-control" name="cod" id="cod"
                                    aria-describedby="helpId" placeholder="">
                                <br>
                                <button type="submit" class="btn btn-primary mr-2">Pesquisar</button>
                                <!-- Envia o form ao clicar -->
                            </form>
                        </center>

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

    @if (session('warning'))
        <script>
            $(document).ready(function() {
                iziToast.warning({
                    title: 'Atenção,',
                    message: '{{ session('warning') }}',
                    position: 'topRight'
                });
            });
        </script>
    @endif
@endsection
