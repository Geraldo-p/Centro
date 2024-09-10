@extends('layouts.admin')
@section('titulo', 'Novo Formando')
@section('css')
    <style>
        .photo-frame {
            border: 1px solid rgb(0, 0, 0);
            width: 200px;
            height: 200px;
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
                <li class="breadcrumb-item"><a href="{{ route('formandos.index') }}">Formando</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Formando</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('formandos.store') }}" method="POST" id="InserirForm" enctype="multipart/form-data">
                @csrf
                <h3>Novo Formando</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-3 relative">
                        <div class="row justify-content-center mt-5">
                            <div class="photo-frame" id="photoFrame">
                                <img src="{{ asset('images/') }}" alt="Foto do Formando">
                            </div>
                        </div>
                        <br>
                        <input class="form-control form-control" type="file" name="foto" id="fotoInput"
                            accept="image/*">

                        <br>

                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3">
                                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#pessoais4"
                                                role="tab" aria-controls="home" aria-selected="true">Dados Pessoais</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#endereco4"
                                                role="tab" aria-controls="profile" aria-selected="false">Endereco</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4"
                                                role="tab" aria-controls="contact" aria-selected="false">Contacto</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="arquivo-tab4" data-toggle="tab" href="#banco4"
                                                role="tab" aria-controls="banco" aria-selected="false">Dados
                                                Acadêmicos
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9">
                                    <div class="tab-content no-padding" id="myTab2Content">
                                        <div class="tab-pane fade show active" id="pessoais4" role="tabpanel"
                                            aria-labelledby="home-tab4">

                                            <div class="row profile-row">
                                                <div class="col-md-8 col-lg-12">
                                                    <h3>Dados Pessoais</h3>
                                                    <hr />
                                                    <div class="row">
                                                        {{-- Dados Pessoais --}}
                                                        <div class="col-sm-12 col-md-6 col-lg-8">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="nome">Nome
                                                                    Completo</label>
                                                                <input
                                                                    class="form-control @error('nome') is-invalid @enderror"
                                                                    type="text" name="nome" />
                                                                @error('nome')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="form-group mb-3 ">
                                                                <label class="form-label" for="data_nascimento">Data de
                                                                    Nascimento</label>
                                                                <input
                                                                    class="form-control @error('data_nascimento') is-invalid @enderror"
                                                                    type="date" name="data_nascimento" />
                                                                @error('data_nascimento')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-5">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="bi">Bilhete de
                                                                    Identidade</label>
                                                                <input
                                                                    class="form-control @error('bi') is-invalid @enderror"
                                                                    type="text" name="bi" />
                                                                @error('bi')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col-lg-4">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="genero">Gênero</label>
                                                                <select
                                                                    class="form-control @error('genero') is-invalid @enderror"
                                                                    name="genero">
                                                                    <optgroup label="Selecione o Gênero">
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('genero')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-3 col-lg-3">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="estado_civil">Estado
                                                                    Cívil</label>
                                                                <select
                                                                    class="form-control @error('estado_civil') is-invalid @enderror"
                                                                    name="estado_civil">
                                                                    <optgroup label="Selecione o Estado cívil">
                                                                        <option value="Solteiro">Solteiro</option>
                                                                        <option value="Casado">Casado</option>
                                                                        <option value="Viúvo">Viúvo</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('estado_civil')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-5">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"
                                                                    for="nacionalidade">Nacionalidade</label>
                                                                <select
                                                                    class="form-control @error('nacionalidade') is-invalid @enderror"
                                                                    name="nacionalidade">
                                                                    <optgroup label="Selecione a Nacionalidade">
                                                                        <option value="Angolana">Angolana</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('nacionalidade')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col-lg-3">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"
                                                                    for="provincia2">Província</label>
                                                                <select
                                                                    class="form-control @error('provincia') is-invalid @enderror"
                                                                    name="provincia2">
                                                                    <optgroup label="Selecione a província">
                                                                        <option value="Bengo">Bengo</option>
                                                                        <option value="Benguela">Benguela</option>
                                                                        <option value="Bié">Bié</option>
                                                                        <option value="Cabinda">Cabinda</option>
                                                                        <option value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option value="Cunene">Cunene</option>
                                                                        <option value="Huambo">Huambo</option>
                                                                        <option value="Huíla">Huíla</option>
                                                                        <option value="Luanda">Luanda</option>
                                                                        <option value="Lunda Norte">Lunda Norte</option>
                                                                        <option value="Lunda Sul">Lunda Sul</option>
                                                                        <option value="Malanje">Malanje</option>
                                                                        <option value="Moxico">Moxico</option>
                                                                        <option value="Namibe">Namibe</option>
                                                                        <option value="Uíge">Uíge</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('provincia')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-3 col-lg-3 col-lg-3">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"
                                                                    for="municipio2">Munícipio</label>
                                                                <select
                                                                    class="form-control @error('municipio') is-invalid @enderror"
                                                                    name="municipio2">
                                                                    <optgroup label="Selecione o município">
                                                                        <option value="Alto Cauale">Alto Cauale</option>
                                                                        <option value="Ambuila">Ambuila</option>
                                                                        <option value="Bembe">Bembe</option>
                                                                        <option value="Buengas">Buengas</option>
                                                                        <option value="Bungo">Bungo</option>
                                                                        <option value="Damba">Damba</option>
                                                                        <option value="Macocola">Macocola</option>
                                                                        <option value="Milunga">Milunga</option>
                                                                        <option value="Mucaba">Mucaba</option>
                                                                        <option value="Negage">Negage</option>
                                                                        <option value="Puri">Puri</option>
                                                                        <option value="Quimbele">Quimbele</option>
                                                                        <option value="Quitexe">Quitexe</option>
                                                                        <option value="Songo">Songo</option>
                                                                        <option value="Uíge">Uíge</option>
                                                                        <option value="Maquela do Zombo">Maquela do Zombo
                                                                        </option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('municipio')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col text-right">
                                                            <a href="#" class="btn btn-primary" type="button"
                                                                id="next-button2">Próximo</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Dados Pessoais --}}
                                        </div>
                                        <div class="tab-pane fade" id="endereco4" role="tabpanel"
                                            aria-labelledby="profile-tab4">
                                            {{--  --}}
                                            <div class="row profile-row">
                                                <div class="col-md-8 col-lg-12">
                                                    <h3>Endereco</h3>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="pais">País</label><select
                                                                    class="form-control @error('pais') is-invalid @enderror"
                                                                    value="Viúvo" name="pais">
                                                                    <optgroup label="Selecione o País">
                                                                        @foreach ($countries as $item)
                                                                            <option value="{{ $item['name']['common'] }}">
                                                                                {{ $item['name']['common'] }}</option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                </select>
                                                                @error('pais')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="provincia">Província</label><select
                                                                    class="form-control @error('provincia') is-invalid @enderror"
                                                                    value="Viúvo" name="provincia">
                                                                    <optgroup label="Selecione a Província">
                                                                        <option value="Bengo">Bengo</option>
                                                                        <option value="Benguela">Benguela</option>
                                                                        <option value="Bié">Bié</option>
                                                                        <option value="Cabinda">Cabinda</option>
                                                                        <option value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option value="Cunene">Cunene</option>
                                                                        <option value="Huambo">Huambo</option>
                                                                        <option value="Huíla">Huíla</option>
                                                                        <option value="Luanda">Luanda</option>
                                                                        <option value="Lunda Norte">Lunda Norte</option>
                                                                        <option value="Lunda Sul">Lunda Sul</option>
                                                                        <option value="Malanje">Malanje</option>
                                                                        <option value="Moxico">Moxico</option>
                                                                        <option value="Namibe">Namibe</option>
                                                                        <option value="Uíge">Uíge</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('provincia')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-4">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="municipio">Munícipio</label>
                                                                <select
                                                                    class="form-control @error('municipio') is-invalid @enderror"
                                                                    name="municipio">
                                                                    <optgroup label="Selecione a província">
                                                                        <option value="Bengo">Bengo</option>
                                                                        <option value="Benguela">Benguela</option>
                                                                        <option value="Bié">Bié</option>
                                                                        <option value="Cabinda">Cabinda</option>
                                                                        <option value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option value="Cunene">Cunene</option>
                                                                        <option value="Huambo">Huambo</option>
                                                                        <option value="Huíla">Huíla</option>
                                                                        <option value="Luanda">Luanda</option>
                                                                        <option value="Lunda Norte">Lunda Norte</option>
                                                                        <option value="Lunda Sul">Lunda Sul</option>
                                                                        <option value="Malanje">Malanje</option>
                                                                        <option value="Moxico">Moxico</option>
                                                                        <option value="Namibe">Namibe</option>
                                                                        <option value="Uíge">Uíge</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('municipio')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col-lg-5">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="bairro">Bairro</label><input
                                                                    class="form-control @error('bairro') is-invalid @enderror"
                                                                    type="text" name="bairro" />
                                                                @error('bairro')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-3 col-lg-3">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="rua">Rua</label><input
                                                                    class="form-control @error('rua') is-invalid @enderror"
                                                                    type="text" name="rua" />
                                                                @error('rua')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-12">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="enderecoDetalhado">Endereço
                                                                    Detalhado</label><input
                                                                    class="form-control @error('enderecoDetalhado') is-invalid @enderror"
                                                                    type="text" name="enderecoDetalhado" />
                                                                @error('enderecoDetalhado')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col text-right">
                                                            <a href="#" class="btn btn-light" type="button"
                                                                id="next-button1">Voltar</a>
                                                            </a>
                                                            <a href="#" class="btn btn-primary" type="button"
                                                                id="next-button3">Próximo</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="tab-pane fade" id="contact4" role="tabpanel"
                                            aria-labelledby="contact-tab4">
                                            {{--  --}}
                                            <div class="row profile-row">
                                                <div class="col-md-8 col-lg-12">
                                                    <h3>Contacto</h3>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="telefone">Nº Telefone</label><input
                                                                    size="9"
                                                                    class="form-control @error('telefone') is-invalid @enderror"
                                                                    type="tel" name="telefone" inputmode="numeric"
                                                                    autocomplete="on" placeholder="+244" maxlength="9"
                                                                    pattern="\d{9}" />
                                                                @error('telefone')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="telefoneOP">Nº Telefone (Opcional)</label><input
                                                                    size="9" maxlength="9" pattern="\d{9}"
                                                                    class="form-control @error('telefoneOP') is-invalid @enderror"
                                                                    type="tel" name="telefoneOP" inputmode="tel"
                                                                    placeholder="+244" autocomplete="on" />
                                                                @error('telefoneOP')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-8">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="email">Email</label><input
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    type="email" name="email" inputmode="email"
                                                                    autocomplete="on" />
                                                                @error('email')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col-lg-4">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="watsapp">WhatsApp</label><input
                                                                    placeholder="+244"
                                                                    class="form-control @error('watsapp') is-invalid @enderror"
                                                                    type="number" name="watsapp" autocomplete="on"
                                                                    inputmode="tel" />
                                                                @error('watsapp')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-8 col-lg-3 col-lg-12">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="outros">Outros</label><input
                                                                    class="form-control @error('outros') is-invalid @enderror"
                                                                    type="text" name="outros" />
                                                                @error('outros')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col text-right">
                                                            <a href="#" class="btn btn-light" type="button"
                                                                id="next-button2_1">Voltar</a>
                                                            </a>
                                                            <a href="#" class="btn btn-primary" type="button"
                                                                id="next-button4">Próximo</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="tab-pane fade" id="banco4" role="tabpanel"
                                            aria-labelledby="arquivo-tab4">
                                            <div class="row profile-row">
                                                <div class="col-md-8 col-lg-12">
                                                    <h3>Dados Acadêmicos</h3>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-12">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="instituicao">Nome da Instituição</label>
                                                                <input
                                                                    class="form-control @error('instituicao') is-invalid @enderror"
                                                                    type="text" name="instituicao"
                                                                    inputmode="latin-name" autocomplete="on" />
                                                                @error('instituicao')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="nivel_escolaridade">Nível de Escolaridade</label>

                                                                <select
                                                                    class="form-control @error('nivel_escolaridade') is-invalid @enderror"
                                                                    name="nivel_escolaridade" autofocus>
                                                                    <optgroup label="Selecione o Nível Acadêmico">
                                                                        <option value="Educação Pré-Escolar" selected>
                                                                            Educação Pré-Escolar </option>
                                                                        <option value="Ensino Primário">Ensino Primário
                                                                        </option>
                                                                        <option value="Ensino Secundário do I Ciclo">Ensino
                                                                            Secundário do I Ciclo </option>
                                                                        <option value="Ensino Secundário do II Ciclo">
                                                                            Ensino Secundário do II Ciclo </option>
                                                                        <option value="Educação Superior">Educação Superior
                                                                        </option>
                                                                        <option value="Educação Superior">Educação Superior
                                                                        </option>
                                                                    </optgroup>
                                                                </select>

                                                                @error('nivel_escolaridade')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 col-lg-3 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="curso">Curso</label><input
                                                                    class="form-control @error('curso') is-invalid @enderror"
                                                                    type="text" name="curso" inputmode="latin-name"
                                                                    autocomplete="on" />
                                                                @error('curso')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-lg-3 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="periodo">Período em que Estuda</label>
                                                                <select
                                                                    class="form-control @error('periodo') is-invalid @enderror"
                                                                    name="periodo" autofocus>
                                                                    <optgroup label="Selecione o Período em que Estuda">
                                                                        <option value="Mãnha" selected>Mãnha </option>
                                                                        <option value="Tarde">Tarde</option>
                                                                        <option value="Noite">Noite</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('periodo')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-lg-3 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="situacao">Período em que Estuda</label>
                                                                <select
                                                                    class="form-control @error('situacao') is-invalid @enderror"
                                                                    name="situacao" autofocus>
                                                                    <optgroup label="Selecione o Período em que Estuda">
                                                                        <option value="Estudando" selected
                                                                            title="Indica que a pessoa está atualmente matriculada em uma instituição de ensino.">
                                                                            Estudando </option>
                                                                        <option value="Concluido"
                                                                            title=" Indica que a pessoa concluiu o nível de escolaridade.">
                                                                            Concluido</option>
                                                                        <option value="Trancado"
                                                                            title="Indica que a pessoa trancou a matrícula, podendo voltar a estudar mais tarde.">
                                                                            Trancado</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('situacao')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-light" type="button"
                                                        id="next-button3_1">Voltar</a>
                                                    </a>
                                                    <a href="#" class="btn btn-success" type="submit"
                                                        id="swal-inserir">Guardar</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="tab-pane fade" id="arquivo4" role="tabpanel"
                                            aria-labelledby="arquivo-tab4">
                                            <div class="row profile-row">
                                                <div class="col-md-8 col-lg-12">
                                                    <h3>Outros</h3>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="nivel_escolaridade">Nível de
                                                                    Escolaridade</label><select
                                                                    class="form-control @error('nivel_escolaridade') is-invalid @enderror"
                                                                    name="nivel_escolaridade" autofocus>
                                                                    <optgroup label="Selecione o Nível de Escolaridada">
                                                                        <option value="Básico" selected>Básico
                                                                        </option>
                                                                        <option value="Técnico Médio">Técnico
                                                                            Médio
                                                                        </option>
                                                                        <option value="Licenciado">Licenciado
                                                                        </option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('nivel_escolaridade')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-3">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="salario">Sálario</label><input
                                                                    class="form-control @error('salario') is-invalid @enderror"
                                                                    type="number" name="salario" inputmode="latin-name"
                                                                    autocomplete="on" />
                                                                @error('salario')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-lg-5">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="cargo">Cargo</label><select
                                                                    class="form-control @error('cargo') is-invalid @enderror"
                                                                    name="cargo">
                                                                    <optgroup
                                                                        label="Selecione o Cargo que o Funcionario ocupa">
                                                                        <option value="Formador" selected>Formador</option>
                                                                        <option value="Bibliotecario">Bibliotecario
                                                                        </option>
                                                                        <option value="Operador de Cyber Café">Operador de
                                                                            Cyber Café
                                                                        </option>
                                                                        <option value="Coordenador de Informática">
                                                                            Coordenador de Informática
                                                                        </option>
                                                                        <option value="Coordenador de Culinária">
                                                                            Coordenador de Culinária
                                                                        </option>
                                                                        <option value="Coordenador Geral">Coordenador Geral
                                                                        </option>
                                                                        <option value="Auxiliar de Limpeza">Auxiliar de
                                                                            Limpeza</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('cargo')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-3 col-lg-3 col-lg-4">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="data_contratacao">Data de
                                                                    Contratação</label><input
                                                                    class="form-control @error('data_contratacao') is-invalid @enderror"
                                                                    type="date" name="data_contratacao" />
                                                                @error('data_contratacao')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-8">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="linguas">Línguas
                                                                    faladas</label><input
                                                                    class="form-control @error('linguas') is-invalid @enderror"
                                                                    type="text" name="linguas" />
                                                                @error('linguas')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-7">
                                                            <div class="form-group fallback mb-3"><label
                                                                    class="form-label"
                                                                    for="departamento_id">Valência</label>
                                                                <select
                                                                    class="form-control @error('departamento_id') is-invalid @enderror"
                                                                    name="departamento_id">
                                                                    <optgroup label="Selecione a valência">
                                                                        <option value=""></option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('departamento_id')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-5">
                                                            <div class="form-group fallback mb-3"><label
                                                                    class="form-label" for="documento">Documentos</label>
                                                                <input
                                                                    class="form-control @error('documento') is-invalid @enderror"
                                                                    type="file" name="documento" accept=".pdf" />
                                                                @error('documento')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-light" type="button"
                                                        id="next-button4_1">Voltar</a>
                                                    </a>
                                                    <a href="#" class="btn btn-success" type="submit"
                                                        id="swal-inserir">Guardar</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
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
        document.getElementById('next-button1').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#pessoais4"]').click();
        });

        document.getElementById('next-button2').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#endereco4"]').click();
        });
        document.getElementById('next-button2_1').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#endereco4"]').click();
        });

        document.getElementById('next-button3').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#contact4"]').click();
        });
        document.getElementById('next-button3_1').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#contact4"]').click();
        });

        document.getElementById('next-button4').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#banco4"]').click();
        });
        document.getElementById('next-button4_1').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#banco4"]').click();
        });

        document.getElementById('next-button5').addEventListener('click', function() {
            document.querySelector('#myTab4 a[href="#arquivo4"]').click();
        });
    </script>
@endsection
