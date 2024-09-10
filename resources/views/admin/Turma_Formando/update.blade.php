@extends('layouts.admin')
@section('titulo', 'Actualizar Funcionario')
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
                <li class="breadcrumb-item"><a href="{{ route('funcionarios.index') }}">Funcionario</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizar Funcionario</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('funcionarios.update', $funcionario) }}" method="POST" id="ActualizarForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Actualizar o Funcionario</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-3 relative">
                        <div class="row justify-content-center mt-5">
                            <div class="photo-frame" id="photoFrame">
                                <img src="{{ asset('images/'. $funcionario->foto) }}" alt="Foto do Funcionario">
                            </div>
                        </div>
                        <br>
                        <input class="form-control form-control" type="file" name="foto" id="fotoInput"
                            accept="image/*">
                            @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
                                                Bancários</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="arquivo-tab4" data-toggle="tab" href="#arquivo4"
                                                role="tab" aria-controls="arquivo" aria-selected="false">Outros</a>
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
                                                                    type="text" name="nome"
                                                                    value="{{ $funcionario->nome }}" />
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
                                                                    type="date" name="data_nascimento"
                                                                    value="{{ $funcionario->data_nascimento }}" />
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
                                                                    type="text" name="bi"
                                                                    value="{{ $funcionario->bi }}" />
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
                                                                        <option
                                                                            @if ($funcionario->genero == 'Masculino') selected @endif
                                                                            value="Masculino">Masculino</option>
                                                                        <option
                                                                            @if ($funcionario->genero == 'Femenino') selected @endif
                                                                            value="Femenino">Femenino</option>
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
                                                                        <option
                                                                            @if ($funcionario->estado_civil == 'Solteiro') selected @endif
                                                                            value="Solteiro">Solteiro</option>
                                                                        <option
                                                                            @if ($funcionario->estado_civil == 'Casado') selected @endif
                                                                            value="Casado">Casado</option>
                                                                        <option
                                                                            @if ($funcionario->estado_civil == 'Viúvo') selected @endif
                                                                            value="Viúvo">Viúvo</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('estado_civil')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- value="{{ $funcionario->bi }}" --}}
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-5">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"
                                                                    for="nacionalidade">Nacionalidade</label>
                                                                <select
                                                                    class="form-control @error('nacionalidade') is-invalid @enderror"
                                                                    name="nacionalidade">
                                                                    <optgroup label="Selecione a Nacionalidade">
                                                                        <option
                                                                            @if ($funcionario->nacionalidade == 'Angolana') selected @endif
                                                                            value="Angolana">Angolana</option>
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
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Bengo') selected @endif
                                                                            value="Bengo">Bengo</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Benguela') selected @endif
                                                                            value="Benguela">Benguela</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Bié') selected @endif
                                                                            value="Bié">Bié</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Cabinda') selected @endif
                                                                            value="Cabinda">Cabinda</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Cuando Cubango') selected @endif
                                                                            value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Cuanza Norte') selected @endif
                                                                            value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Cuanza Sul') selected @endif
                                                                            value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Cunene') selected @endif
                                                                            value="Cunene">Cunene</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Huambo') selected @endif
                                                                            value="Huambo">Huambo</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Huíla') selected @endif
                                                                            value="Huíla">Huíla</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Luanda') selected @endif
                                                                            value="Luanda">Luanda</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Lunda Norte') selected @endif
                                                                            value="Lunda Norte">Lunda Norte</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Lunda Sul') selected @endif
                                                                            value="Lunda Sul">Lunda Sul</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Malanje') selected @endif
                                                                            value="Malanje">Malanje</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Moxico') selected @endif
                                                                            value="Moxico">Moxico</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Namibe') selected @endif
                                                                            value="Namibe">Namibe</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Zaire') selected @endif
                                                                            value="Zaire">Zaire</option>
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
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Alto Cauale') selected @endif
                                                                            value="Alto Cauale">Alto Cauale</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Ambuila') selected @endif
                                                                            value="Ambuila">Ambuila</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Bembe') selected @endif
                                                                            value="Bembe">Bembe</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Buengas') selected @endif
                                                                            value="Buengas">Buengas</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Bungo') selected @endif
                                                                            value="Bungo">Bungo</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Damba') selected @endif
                                                                            value="Damba">Damba</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Macocola') selected @endif
                                                                            value="Macocola">Macocola</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Milunga') selected @endif
                                                                            value="Milunga">Milunga</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Mucaba') selected @endif
                                                                            value="Mucaba">Mucaba</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Negage') selected @endif
                                                                            value="Negage">Negage</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Puri') selected @endif
                                                                            value="Puri">Puri</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Quimbele') selected @endif
                                                                            value="Quimbele">Quimbele</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Quitexe') selected @endif
                                                                            value="Quitexe">Quitexe</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Songo') selected @endif
                                                                            value="Songo">Songo</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($funcionario->municipio == 'Maquela do Zombo') selected @endif
                                                                            value="Maquela do Zombo">Maquela do Zombo
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
                                                                            <option
                                                                                @if ($funcionario->pais == $item['name']['common']) selected @endif
                                                                                value="{{ $item['name']['common'] }}">
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
                                                                        <option
                                                                            @if ($funcionario->provincia == 'Bengo') selected @endif
                                                                            value="Bengo">Bengo</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Benguela') selected @endif
                                                                            value="Benguela">Benguela</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Bié') selected @endif
                                                                            value="Bié">Bié</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Cabinda') selected @endif
                                                                            value="Cabinda">Cabinda</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Cuando Cubango') selected @endif
                                                                            value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Cuanza Norte') selected @endif
                                                                            value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Cuanza Sul') selected @endif
                                                                            value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Cunene') selected @endif
                                                                            value="Cunene">Cunene</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Huambo') selected @endif
                                                                            value="Huambo">Huambo</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Huíla') selected @endif
                                                                            value="Huíla">Huíla</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Luanda') selected @endif
                                                                            value="Luanda">Luanda</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Lunda Norte') selected @endif
                                                                            value="Lunda Norte">Lunda Norte</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Lunda Sul') selected @endif
                                                                            value="Lunda Sul">Lunda Sul</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Malanje') selected @endif
                                                                            value="Malanje">Malanje</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Moxico') selected @endif
                                                                            value="Moxico">Moxico</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Namibe') selected @endif
                                                                            value="Namibe">Namibe</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->provincia == 'Zaire') selected @endif
                                                                            value="Zaire">Zaire</option>
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
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Alto Cauale') selected @endif
                                                                            value="Alto Cauale">Alto Cauale</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Ambuila') selected @endif
                                                                            value="Ambuila">Ambuila</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Bembe') selected @endif
                                                                            value="Bembe">Bembe</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Buengas') selected @endif
                                                                            value="Buengas">Buengas</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Bungo') selected @endif
                                                                            value="Bungo">Bungo</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Damba') selected @endif
                                                                            value="Damba">Damba</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Macocola') selected @endif
                                                                            value="Macocola">Macocola</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Milunga') selected @endif
                                                                            value="Milunga">Milunga</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Mucaba') selected @endif
                                                                            value="Mucaba">Mucaba</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Negage') selected @endif
                                                                            value="Negage">Negage</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Puri') selected @endif
                                                                            value="Puri">Puri</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Quimbele') selected @endif
                                                                            value="Quimbele">Quimbele</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Quitexe') selected @endif
                                                                            value="Quitexe">Quitexe</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Songo') selected @endif
                                                                            value="Songo">Songo</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($funcionario->enderecos->municipio == 'Maquela do Zombo') selected @endif
                                                                            value="Maquela do Zombo">Maquela do Zombo
                                                                        </option>
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
                                                                    value="{{ $funcionario->enderecos->bairro }}"
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
                                                                    value="{{ $funcionario->enderecos->rua }}"
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
                                                                    value="{{ $funcionario->enderecos->enderecoDetalhado }}"
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
                                                                    value="{{ $funcionario->contactos->telefone }}"
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
                                                                    value="{{ $funcionario->contactos->telefoneOP }}"
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
                                                                    value="{{ $funcionario->contactos->email }}"
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
                                                                    value="{{ $funcionario->contactos->watsapp }}"
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
                                                                    type="text" name="outros"
                                                                    value="{{ $funcionario->contactos->outros }}" />
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
                                                    <h3>Dados Bancários</h3>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-12">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="nome_banco">Nome do Banco</label>
                                                                <select
                                                                    class="form-control @error('nome_banco') is-invalid @enderror"
                                                                    name="nome_banco">
                                                                    <optgroup label="Selecione o banco">
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Angolano de Investimentos (BAI)') selected @endif
                                                                            value="Banco Angolano de Investimentos (BAI)">
                                                                            Banco Angolano de Investimentos (BAI)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco de Fomento Angola (BFA)') selected @endif
                                                                            value="Banco de Fomento Angola (BFA)">Banco
                                                                            de Fomento Angola (BFA)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco de Poupança e Crédito (BPC)') selected @endif
                                                                            value="Banco de Poupança e Crédito (BPC)">
                                                                            Banco de Poupança e Crédito (BPC)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Económico (BE)') selected @endif
                                                                            value="Banco Económico (BE)">Banco
                                                                            Económico (BE)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Keve') selected @endif
                                                                            value="Banco Keve">Banco Keve</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Millennium Atlântico (BMA)') selected @endif
                                                                            value="Banco Millennium Atlântico (BMA)">
                                                                            Banco Millennium Atlântico (BMA)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Nacional de Angola (BNA)') selected @endif
                                                                            value="Banco Nacional de Angola (BNA)">
                                                                            Banco Nacional de Angola (BNA)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Prestígio') selected @endif
                                                                            value="Banco Prestígio">Banco Prestígio
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Sol') selected @endif
                                                                            value="Banco Sol">Banco Sol</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco de Negócios Internacional (BNI)') selected @endif
                                                                            value="Banco de Negócios Internacional (BNI)">
                                                                            Banco de Negócios Internacional (BNI)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco de Comércio e Indústria (BCI)') selected @endif
                                                                            value="Banco de Comércio e Indústria (BCI)">
                                                                            Banco de Comércio e Indústria (BCI)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Caixa Geral Angola (BCGA)') selected @endif
                                                                            value="Banco Caixa Geral Angola (BCGA)">
                                                                            Banco Caixa Geral Angola (BCGA)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco Valor (BVB)') selected @endif
                                                                            value="Banco Valor (BVB)">Banco Valor (BVB)
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Standard Bank de Angola (SBA)') selected @endif
                                                                            value="Standard Bank de Angola (SBA)">
                                                                            Standard Bank de Angola (SBA)</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Banco de Desenvolvimento de Angola (BDA)') selected @endif
                                                                            value="Banco de Desenvolvimento de Angola (BDA)">
                                                                            Banco de Desenvolvimento de Angola (BDA)
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Auxiliar de Limpeza') selected @endif
                                                                            value="Banco Yetu">Banco Yetu</option>
                                                                        <option
                                                                            @if ($funcionario->nome_banco == 'Auxiliar de Limpeza') selected @endif
                                                                            value="Banco de Comércio e Desenvolvimento (BCD)">
                                                                            Banco de Comércio e Desenvolvimento (BCD)
                                                                        </option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('nome_banco')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="num_conta_banco">Nº de Conta
                                                                    Bancaria</label><input
                                                                    value="{{ $funcionario->num_conta_banco }}"
                                                                    class="form-control @error('num_conta_banco') is-invalid @enderror"
                                                                    type="text" name="num_conta_banco"
                                                                    inputmode="latin-name" autocomplete="on" />
                                                                @error('num_conta_banco')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 col-lg-3 col-lg-6">
                                                            <div class="form-group mb-3"><label class="form-label"
                                                                    for="iban">IBAN</label><input
                                                                    value="{{ $funcionario->iban }}"
                                                                    class="form-control @error('iban') is-invalid @enderror"
                                                                    type="text" name="iban" inputmode="latin-name"
                                                                    autocomplete="on" placeholder="AO06" />
                                                                @error('iban')
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
                                                    <a href="#" class="btn btn-primary" type="button"
                                                        id="next-button5">Próximo</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="arquivo4" role="tabpanel"
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
                                                                    <optgroup label="Selecione o Nível Acadêmico">
                                                                            <option @if ($funcionario->nivel_escolaridade == "Educação Pré-Escolar") selected @endif value="Educação Pré-Escolar">Educação Pré-Escolar</option>
                                                                            <option @if ($funcionario->nivel_escolaridade == "Ensino Primário") selected @endif value="Ensino Primário">Ensino Primário</option>
                                                                            <option @if ($funcionario->nivel_escolaridade == "Ensino Secundário do I Ciclo") selected @endif value="Ensino Secundário do I Ciclo">Ensino Secundário do I Ciclo</option>
                                                                            <option @if ($funcionario->nivel_escolaridade == "Ensino Secundário do II Ciclo") selected @endif value="Ensino Secundário do II Ciclo">Ensino Secundário do II Ciclo</option>
                                                                            <option @if ($funcionario->nivel_escolaridade == "Educação Superior") selected @endif value="Educação Superior">Educação Superior</option>
                                                                            <option @if ($funcionario->nivel_escolaridade == "Formação Técnico-Profissional") selected @endif value="Formação Técnico-Profissional">Formação Técnico-Profissional</option>
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
                                                                    value="{{ $funcionario->salario }}"
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
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Formador') selected @endif
                                                                            value="Formador">Formador</option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Bibliotecario') selected @endif
                                                                            value="Bibliotecario">Bibliotecario
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Operador de Cyber Café') selected @endif
                                                                            value="Operador de Cyber Café">Operador de
                                                                            Cyber Café
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Coordenador de Informática') selected @endif
                                                                            value="Coordenador de Informática">
                                                                            Coordenador de Informática
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Coordenador de Culinária') selected @endif
                                                                            value="Coordenador de Culinária">
                                                                            Coordenador de Culinária
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Coordenador Geral') selected @endif
                                                                            value="Coordenador Geral">Coordenador Geral
                                                                        </option>
                                                                        <option
                                                                            @if ($funcionario->cargo == 'Auxiliar de Limpeza') selected @endif
                                                                            value="Auxiliar de Limpeza">Auxiliar de
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
                                                                    value="{{ $funcionario->data_contratacao }}"
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
                                                                    value="{{ $funcionario->linguas }}"
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
                                                                        @foreach ($valencia as $item)
                                                                            <option value="{{ $item->id }}"
                                                                                @if ($item->id = $funcionario->departamento_id) selected @endif>
                                                                                {{ $item->nome }}</option>
                                                                        @endforeach
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
                                                        id="swal-Actualizar">Actualizar</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
