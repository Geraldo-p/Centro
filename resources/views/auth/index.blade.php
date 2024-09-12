@extends('layouts.admin')
@section('titulo', 'Utilizadores')


@section('content')
    <section class="section">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                {{-- Utilizadores --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Utilizadores</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabela de Utilizadores</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Utilizador</th>
                                        <th>Nível de Acesso</th>
                                        <th>Registrado</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->nivel_acesso }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <form id="deleteForm-{{ $item->id }}"
                                                    action="{{ route('users.destroy', $item) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div>
                                                        <a href="{{ route('users.edit', $item->id) }}"
                                                            title="Actualizar" class="btn btn-primary"><i
                                                                class="fas fa-edit    "></i></a>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <script>
                                            document.getElementById("swal__{{ $item->id }}").addEventListener("click", function(event) {
                                                event.preventDefault();
                                                swal({
                                                    title: 'Tem certeza?',
                                                    text: 'Tem certeza que deseja excluir a categoria {{ $item->nome }}? Esta ação não pode ser desfeita.',
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
                <h4 class="mb-0">
                    <a name="" id="" class="btn btn-primary mr-2" href="{{ route('users.create') }}"
                        role="button">+ Novo</a>
                </h4>
                <h4 class="mb-0">
                    <a name="" id="" class="btn btn-danger" href="" role="button"><i
                            class="fas fa-file-pdf    "></i> PDF</a>
                </h4>
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
