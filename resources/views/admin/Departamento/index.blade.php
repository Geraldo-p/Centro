@extends('layouts.admin')

@section('titulo', 'Departamento')

@section('content')
    <section class="section">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">Departamentos</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Departamentos</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabela de Departamentos</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th>Hora de Entrada</th>
                                        <th>Hora de Fechar</th>
                                        <th>Estado</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departamentos as $item)
                                        @php
                                            $horaAtual = \Carbon\Carbon::now('Africa/Luanda')->format('H:i');
                                        @endphp
                                        <tr>
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->hora_entrada }}</td>
                                            <td>{{ $item->hora_fechamento }}</td>
                                            <td>

                                                @if ($item->hora_entrada <= $horaAtual && $horaAtual <= $item->hora_fechamento)
                                                    <span style="color: green;">Aberto</span>
                                                @else
                                                    <span style="color: red;">Fechado</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div>
                                                    <form id="deleteForm-{{ $item->id }}"
                                                        action="{{ route('departamentos.destroy', $item) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a href="{{ route('departamentos.edit', $item->id) }}"
                                                            title="Actualizar" class="btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" id="swal__{{ $item->id }}" title="Excluir"
                                                            class="btn btn-danger">
                                                            <i class="fas fa-window-close"></i>
                                                        </a>
                                                        <a href="{{ route('departamentos.show', $item->id) }}"
                                                            title="Detalhes" class="btn btn-warning">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <script>
                                            document.getElementById("swal__{{ $item->id }}").addEventListener("click", function(event) {
                                                event.preventDefault();
                                                swal({
                                                    title: 'Tem certeza?',
                                                    text: 'Tem certeza que deseja excluir o curso" {{ $item->nome }}?" Esta ação não pode ser desfeita.',
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
                                                        swal('Exclusão cancelada', {
                                                            icon: 'info'
                                                        });
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
                <a class="btn btn-primary mr-2" href="{{ route('departamentos.create') }}" role="button">+ Novo</a>
                <a class="btn btn-danger" href="{{ route('departamentos.pdf') }}" role="button">
                    <i class="fas fa-file-pdf"></i> PDF
                </a>
            </div>
        </div>
    </section>
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
