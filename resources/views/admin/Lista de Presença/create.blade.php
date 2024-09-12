@extends('layouts.admin')
@section('titulo', 'Lista de Presença')
@section('css')
    <style>
        .photo-frame {
            border: 1px solid rgb(0, 0, 0);
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

    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Categoria --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('lista_presencas.index') }}">Turma</a></li>
                <li class="breadcrumb-item active" aria-current="page">Preencher Lista de Presença</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('lista_presencas.store') }}" method="POST" id="InserirForm"
                enctype="multipart/form-data">
                @csrf
                <h3>Preencher Lista de Presença</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-6 relative">
                        <div class="profile-feed">
                            <center>
                                <h5>LISTA DE PRESENÇA</h5>
                            </center>
                            <div class="table-responsive">
                                <table id="carrinho" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome Completo</th>
                                            <th>Módulo</th>
                                            <th>Estado</th>
                                            <th>Data</th>
                                            <th style="width:50px;">Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- As linhas serão inseridas aqui via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nome">Pesquisar Formando</label>
                                    <input class="form-control @error('nome') is-invalid @enderror" type="text"
                                        name="nome" id="nome">
                                    @error('nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="aula_nome">Descrição da Aula</label>
                                    <input class="form-control @error('aula_nome') is-invalid @enderror" type="text"
                                        name="aula_nome" id="aula_nome">
                                    @error('aula_nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <div class="form-group mb-3">
                                    <label class="form-label" id="" for="formando_id">Formando</label>
                                    depois selecionar apenas formandos relacionados ao formador
                                    <select disabled class="form-control @error('formando_id') is-invalid @enderror"
                                        name="formando_id" id="formando_id">
                                        @foreach ($formandos as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('formando_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="presenca">Estado</label>
                                    <select class="form-control @error('presenca') is-invalid @enderror"
                                        name="presenca" id="presenca">
                                            <option value="Presente">Presente</option>
                                            <option value="Ausente">Ausente</option>
                                    </select>
                                    @error('nome')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="form-group mb-3">
                                    <label class="form-label" id="" for="modulo_id">Módulo</label>
                                    <select class="form-control @error('modulo_id') is-invalid @enderror" name="modulo_id"
                                        id="modulo_id">
                                        @foreach ($modulos as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('modulo_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="data_presenca">Data</label>
                                    <input class="form-control @error('data_presenca') is-invalid @enderror" type="date"
                                        name="data_presenca" id="data_presenca">
                                    @error('data_presenca')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="button" id="botao" class="btn btn-primary mr-2">Adicionar</button>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 content-right">
                        <button class="btn btn-success form-btn" type="button" id="swal-inserir">Guardar</button>
                        <a href="{{ route('turma_formandos.index') }}">
                            <input type="button" value="Cancelar" class="btn btn-danger form-btn">
                        </a>
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
            {{ session()->forget('sucesso') }}
        </script>
    @endif
    @if (session('warning'))
        <script>
            $(document).ready(function() {
                iziToast.warning({
                    title: 'Atenção, ',
                    message: '{{ session('warning') }}',
                    position: 'topRight'
                });
            });
            {{ session()->forget('warning') }}
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
            {{ session()->forget('erro') }}
        </script>
    @endif

    <script>
        document.getElementById('fotoInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const photoFrame = document.getElementById('photoFrame');
                    photoFrame.innerHTML = ''; // Clear the frame
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    photoFrame.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

    <script>
        document.getElementById('botao').addEventListener('click', function() {
    var moduloSelect = document.getElementById('modulo_id');
    var formandoSelect = document.getElementById('formando_id');
    var presencaSelect = document.getElementById('presenca');
    var dataInput = document.getElementById('data_presenca');

    var modeloId = moduloSelect.value;
    var moduloNome = moduloSelect.options[moduloSelect.selectedIndex].text;

    var formandoId = formandoSelect.value;
    var formandoNome = formandoSelect.options[formandoSelect.selectedIndex].text;

    var presenca = presencaSelect.value;
    var data = dataInput.value;

    if (modeloId && formandoId && presenca && data) {
        var tabela = document.getElementById('carrinho').getElementsByTagName('tbody')[0];
        var linhas = tabela.getElementsByTagName('tr');
        var existe = false;

        for (var i = 0; i < linhas.length; i++) {
            var cells = linhas[i].getElementsByTagName('td');
            var moduloExistenteId = cells[1].getElementsByTagName('input')[0].value;
            var formandoExistenteId = cells[0].getElementsByTagName('input')[0].value;

            if (moduloExistenteId === modeloId && formandoExistenteId === formandoId) {
                existe = true;
                break;
            }
        }

        if (existe) {
            alert('A combinação de (Módulo, Formando, Estado e Data) já existe.');
        } else {
            var novaLinha = tabela.insertRow();

            // Formando
            var formandoCell = novaLinha.insertCell(0);
            formandoCell.innerHTML = `${formandoNome} <input type="hidden" name="carrinho_formando_id_val[]" value="${formandoId}">`;

            // Módulo
            var moduloCell = novaLinha.insertCell(1);
            moduloCell.innerHTML = `${moduloNome} <input type="hidden" name="carrinho_modulo_id_val[]" value="${modeloId}">`;

            // Estado
            var estadoCell = novaLinha.insertCell(2);
            estadoCell.innerHTML = `${presenca} <input type="hidden" name="carrinho_estado[]" value="${presenca}">`;

            // Data
            var dataCell = novaLinha.insertCell(3);
            dataCell.innerHTML = `${data} <input type="hidden" name="carrinho_data[]" value="${data}">`;

            // Remover botão
            var removerCell = novaLinha.insertCell(4);
            var botaoRemover = document.createElement('button');
            botaoRemover.type = 'button';
            botaoRemover.classList.add('btn', 'btn-danger');
            botaoRemover.textContent = 'Remover';
            removerCell.appendChild(botaoRemover);

            botaoRemover.addEventListener('click', function() {
                tabela.deleteRow(novaLinha.rowIndex);
            });
        }
    } else {
        alert('Por favor, preencha todos os campos (Módulo, Formando, Estado e Data).');
    }
});

    </script>

    <script>
        document.getElementById('nome').addEventListener('input', function() {
            var inputValue = this.value.toLowerCase();
            var selectElement = document.getElementById('formando_id');
            var options = selectElement.options;

            // Loop through all options and select the one that matches the input value
            for (var i = 0; i < options.length; i++) {
                var option = options[i];
                if (option.text.toLowerCase().includes(inputValue)) {
                    selectElement.value = option.value; // Select the matching option
                    return; // Exit the function once a match is found
                }
            }
            selectElement.value = ''; // Clear the selection if no match is found
        });
    </script>
@endsection
