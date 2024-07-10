@extends('layouts.admin')
@section('titulo', 'Categoria')


@section('content')
    <section class="section">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">
                {{-- Categoria --}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabela de Cursos</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th>Inscrição</th>
                                        <th>Duração</th>
                                        <th>Estado</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $item)
                                        <tr>
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->preco }}</td>
                                            <td>{{ $item->duracao }}</td>
                                            @if (\Carbon\Carbon::parse($item->data_fim)->isFuture())
                                                <td>Terminado</td>
                                            @else
                                                <td>Em Anmdamento</td>
                                            @endif
                                            <td>
                                                <form id="deleteForm" action="{{ route('cursos.destroy', $item) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div>
                                                        <a href="{{ route('cursos.edit', $item->id) }}" title="Actualizar"
                                                            class="btn btn-primary"><i class="fas fa-edit    "></i></a>

                                                        <a id="swal-6" href="#" title="Actualizar" title="Excluir"
                                                            class="btn btn-danger"><i class="fas fa-window-close"></i></a>

                                                        <a href="{{ route('cursos.show', $item->id) }}" title="Detalhes"
                                                            class="btn btn-warning"><i class="fas fa-eye"></i></a>
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
            <div class="col-12 d-flex align-items-center">
                <h4 class="mb-0">
                    <a name="" id="" class="btn btn-primary mr-2" href="{{ route('cursos.create') }}"
                        role="button">+ Novo</a>
                </h4>
                <h4 class="mb-0">
                    <a name="" id="" class="btn btn-danger" href="{{ route('cursos.pdf') }}"
                        role="button"><i class="fas fa-file-pdf    "></i> PDF</a>
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
