@extends('layouts.admin')
@section('titulo', 'Matricula')
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
                <li class="breadcrumb-item"><a href="{{ route('turmas.index') }}">Turma</a></li>
                <li class="breadcrumb-item active" aria-current="page">Preencher Turma</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('turma_formandos.store') }}" method="POST" id="InserirForm"
                enctype="multipart/form-data">
                @csrf
                <h3>Preencher Turma</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-6 relative">
                        <div class="profile-feed">
                            <center>
                                <h5>LISTA DOS ESTUDANTES NA TURMA</h5>
                            </center>
                            <div class="table-responsive">
                                <table id="carrinho" class="table">
                                    <thead>
                                        <tr>
                                            <th>Turma</th>
                                            <th>Nome Completo</th>
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

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" id="" for="formando_id">Formando</label>
                                    <select readonly class="form-control @error('formando_id') is-invalid @enderror"
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="turma_id">Turma</label>
                                    <select class="form-control @error('turma_id') is-invalid @enderror" name="turma_id"
                                        id="turma_id">
                                        <option value="">Selecione uma turma</option>
                                        @foreach ($turmas as $item)
                                            <option value="{{ $item->id }}" data-curso="{{ $item->cursos->id }}"
                                                data-sala="{{ $item->salas->capacidade }}">{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('turma_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="sala_id">Qtd. Vagas</label>
                                    <input type="text" class="form-control @error('sala_id') is-invalid @enderror"
                                        name="sala_id" id="sala_id" readonly>
                                    @error('sala_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="curso_id">Curso Associado à Turma</label>
                                    <select class="form-control @error('curso_id') is-invalid @enderror" name="curso_id"
                                        id="curso_id" disabled>
                                        <option value="">Selecione um curso</option>
                                        @foreach ($cursos as $curso)
                                            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('curso_id')
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
            // Obter os valores dos selects
            var turmaSelect = document.getElementById('turma_id');
            var formandoSelect = document.getElementById('formando_id');

            var turmaId = turmaSelect.value;
            var turmaNome = turmaSelect.options[turmaSelect.selectedIndex].text;

            var formandoId = formandoSelect.value;
            var formandoNome = formandoSelect.options[formandoSelect.selectedIndex].text;

            // Verificar se ambos os valores foram selecionados
            if (turmaId && formandoId) {
                var tabela = document.getElementById('carrinho').getElementsByTagName('tbody')[0];
                var linhas = tabela.getElementsByTagName('tr');
                var existe = false;

                // Verificar se já existe uma linha com esses valores de turmaId e formandoId
                for (var i = 0; i < linhas.length; i++) {
                    var cells = linhas[i].getElementsByTagName('td');
                    var turmaExistenteId = cells[0].getElementsByTagName('input')[0].value;
                    var formandoExistenteId = cells[1].getElementsByTagName('input')[0].value;

                    if (turmaExistenteId === turmaId && formandoExistenteId === formandoId) {
                        existe = true;
                        break;
                    }
                }

                if (existe) {
                    alert('A combinação da TURMA e do FORMANDO já está na tabela.');
                } else {
                    // Criar uma nova linha na tabela
                    var novaLinha = tabela.insertRow();

                    // Criar célula para a turma
                    var turmaCell = novaLinha.insertCell(0);
                    turmaCell.innerHTML = `
                ${turmaNome}
                <input type="hidden" name="carrinho_turma_id_val[]" value="${turmaId}">
                `;

                    // Criar célula para o formando
                    var formandoCell = novaLinha.insertCell(1);
                    formandoCell.innerHTML = `
                ${formandoNome}
                <input type="hidden" name="carrinho_formando_id_val[]" value="${formandoId}">
                `;

                    // Criar célula para o botão de remoção
                    var removerCell = novaLinha.insertCell(2);
                    var botaoRemover = document.createElement('button');
                    botaoRemover.type = 'button';
                    botaoRemover.classList.add('btn', 'btn-danger');
                    botaoRemover.textContent = 'Remover';
                    removerCell.appendChild(botaoRemover);

                    // Evento para remover a linha
                    botaoRemover.addEventListener('click', function() {
                        tabela.deleteRow(novaLinha.rowIndex - 1);
                    });
                }
            } else {
                alert('Por favor, selecione A TURMA E O FORMANDO.');
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


    <style>
        div {
            position: relative;
        }
    </style>

    <script>
        $(document).ready(function() {
            // Quando o select de turma mudar
            $('#turma_id').change(function() {
                // Obter o curso associado à turma selecionada
                var selectedTurma = $(this).find(':selected');
                var cursoId = selectedTurma.data('curso'); // pega o valor de data-curso
                var salaId = selectedTurma.data('sala'); // pega o valor de data-sala

                // Atualizar o campo de curso com base no curso associado à turma
                $('#curso_id').val(cursoId);

                $('#sala_id').val(salaId);

            });
        });
    </script>
@endsection
