@extends('layouts.admin')
@section('titulo', 'Efectuar Pagamento')

<style>
    #comprov {
        display: none;
    }
</style>
@section('content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <h3 class="page-title">
            {{-- Pagamento --}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{ route('pagamentos.index') }}">Pagamento</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Processo de Pagamento</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('pagamentos.store') }}" method="POST" id="InserirForm">
                @csrf
                <div class="row profile-row">
                    <div class="col-md-8 col-lg-12">
                        <h2>Efectuar Pagamento</h2>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 col-md-2 col-lg-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nome">Código do Formando</label>
                                    <input readonly class="form-control @error('cod_formando') is-invalid @enderror"
                                        type="text" value="{{ $cod }}" name="cod_formando" id="cod_formando">
                                    @error('cod_formando')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-4 col-xxl-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="formando_id">Formando</label>
                                    <select class="form-control @error('formando_id') is-invalid @enderror" readonly
                                        id="formando_id" name="formando_id">
                                        @foreach ($formandos as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('formando_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-5 col-xxl-5">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="curso">Curso</label>
                                    <select id="curso" name="curso_id" readonly
                                        class="form-control @error('curso_id') is-invalid @enderror">
                                        @foreach ($cursos as $item)
                                            <option value="{{ $item->id }}" data-preco="{{ $item->preco }}">
                                                {{ $item->nome }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('curso_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="preco">Preço</label>
                                    @foreach ($cursos as $item)
                                        <input type="text" id="preco" value="{{ $item->preco }}"
                                            class="form-control @error('preco') is-invalid @enderror" name="preco"
                                            readonly>
                                    @endforeach
                                    @error('preco')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tipo">Tipo de Pagamento</label>
                                    <select id="tipo" class="form-control @error('tipo') is-invalid @enderror"
                                        name="tipo">
                                        <option value="Dinheiro em Mão" selected>Dinheiro em Mão</option>
                                        <option value="Transferencia Bancária">Transferencia Bancária</option>
                                        <option value="Depósito">Depósito</option>
                                    </select>
                                    @error('tipo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 col-xxl-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="">A pagar %</label>
                                    <select class="form-control @error('percentagem') is-invalid @enderror"
                                        name="percentagem" id="percentagem">
                                        <option value="50" selected>50%</option>
                                        <option value="70">70%</option>
                                        <option value="100">100%</option>
                                    </select>
                                    @error('percentagem')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 col-xxl-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="">Valor a Pagar</label>
                                    <input type="text" id="valor" readonly
                                        class="form-control @error('valor') is-invalid @enderror" name="valor">
                                    @error('valor')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 col-xxl-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="">Em Falta</label>
                                    <input class="form-control @error('em_falta') is-invalid @enderror" type="text"
                                        id="em_falta" name="em_falta" readonly>
                                    @error('em_falta')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div id="comprov" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-9">

                                <div class="form-group mb-3">
                                    <label class="form-label" for="">Submeter Comprovativo</label>
                                    <input class="form-control @error('comprovativo') is-invalid @enderror" type="file"
                                        name="comprovativo">
                                    @error('comprovativo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="">Coordenadas Báncarias, <br> BAI: AO0600 5456 2145 5454 45456
                                    <br> Atlantico: AO0600 5456 2145 5454 45456 <br>Centro de Formanação Profissional Santa
                                    Cruz</label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="button" id="swal-inserir">Pagar</button>
                                <a href="{{ route('pagamentos.index') }}"><input type="button" value="Cancelar"
                                        class="btn btn-danger form-btn"></a>
                            </div>
                        </div>
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
        </script>
        {{ session()->forget('sucesso') }}
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
        {{ session()->forget('erro') }}
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cursoSelect = document.getElementById('curso');
            const precoInput = document.getElementById('preco');
            const percentagemSelect = document.querySelector('select[name="percentagem"]');
            const valorAPagarInput = document.querySelector('input[name="valor"]');
            const emFaltaInput = document.querySelector('input[name="em_falta"]');

            // Função para atualizar o preço quando o curso é selecionado
            cursoSelect.addEventListener('change', function() {
                const selectedOption = cursoSelect.options[cursoSelect.selectedIndex];
                const preco = selectedOption.getAttribute('data-preco');
                precoInput.value = preco;
                calcularValorAPagar(); // Atualiza o valor a pagar quando o curso muda
            });

            // Função para calcular o valor a pagar e o valor em falta
            function calcularValorAPagar() {
                const preco = parseFloat(precoInput.value) || 0;
                const percentagem = parseFloat(percentagemSelect.value) || 0;
                const valorAPagar = (preco * percentagem) / 100;
                const emFalta = preco - valorAPagar;

                // Atualiza os campos
                valorAPagarInput.value = valorAPagar.toFixed(2);
                emFaltaInput.value = emFalta.toFixed(2);
            }

            // Atualiza o valor a pagar e o em falta quando a percentagem mudar
            percentagemSelect.addEventListener('change', calcularValorAPagar);
        });
    </script>
    <script>
        document.getElementById('tipo').addEventListener('change', function() {
            var comprovDiv = document.getElementById('comprov');
            if (this.value === 'Transferencia Bancária' || this.value === 'Depósito') {
                comprovDiv.style.display = 'block';
            } else {
                comprovDiv.style.display = 'none';
            }
        });
    </script>



@endsection
