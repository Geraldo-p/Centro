@extends('layouts.admin')
@section('titulo', 'Actualizar Formando')
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
                <li class="breadcrumb-item active" aria-current="page">Actualizar Formando</li>
            </ol>
        </nav>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <form action="{{ route('formandos.update', $formando) }}" method="POST" id="ActualizarForm"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Actualizar o Formando</h3>
                <hr>
                <div class="row profile-row">
                    <div class="col-md-3 relative">
                        <div class="row justify-content-center mt-5">
                            <div class="photo-frame" id="photoFrame">
                                <img src="{{ asset('images/' . $formando->foto) }}" alt="Foto do Formando">
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
                                                Acadêmicos</a>
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
                                                                    value="{{ $formando->nome }}" />
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
                                                                    value="{{ $formando->data_nascimento }}" />
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
                                                                    value="{{ $formando->bi }}" />
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
                                                                            @if ($formando->genero == 'Masculino') selected @endif
                                                                            value="Masculino">Masculino</option>
                                                                        <option
                                                                            @if ($formando->genero == 'Femenino') selected @endif
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
                                                                            @if ($formando->estado_civil == 'Solteiro') selected @endif
                                                                            value="Solteiro">Solteiro</option>
                                                                        <option
                                                                            @if ($formando->estado_civil == 'Casado') selected @endif
                                                                            value="Casado">Casado</option>
                                                                        <option
                                                                            @if ($formando->estado_civil == 'Viúvo') selected @endif
                                                                            value="Viúvo">Viúvo</option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('estado_civil')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- value="{{ $formando->bi }}" --}}
                                                        <div class="col-sm-12 col-md-6 col-lg-5 col-lg-3 col-lg-5">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"
                                                                    for="nacionalidade">Nacionalidade</label>
                                                                <select
                                                                    class="form-control @error('nacionalidade') is-invalid @enderror"
                                                                    name="nacionalidade">
                                                                    <optgroup label="Selecione a Nacionalidade">
                                                                        <option
                                                                            @if ($formando->nacionalidade == 'Angolana') selected @endif
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
                                                                            @if ($formando->provincia == 'Bengo') selected @endif
                                                                            value="Bengo">Bengo</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Benguela') selected @endif
                                                                            value="Benguela">Benguela</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Bié') selected @endif
                                                                            value="Bié">Bié</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Cabinda') selected @endif
                                                                            value="Cabinda">Cabinda</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Cuando Cubango') selected @endif
                                                                            value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Cuanza Norte') selected @endif
                                                                            value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Cuanza Sul') selected @endif
                                                                            value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Cunene') selected @endif
                                                                            value="Cunene">Cunene</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Huambo') selected @endif
                                                                            value="Huambo">Huambo</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Huíla') selected @endif
                                                                            value="Huíla">Huíla</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Luanda') selected @endif
                                                                            value="Luanda">Luanda</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Lunda Norte') selected @endif
                                                                            value="Lunda Norte">Lunda Norte</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Lunda Sul') selected @endif
                                                                            value="Lunda Sul">Lunda Sul</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Malanje') selected @endif
                                                                            value="Malanje">Malanje</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Moxico') selected @endif
                                                                            value="Moxico">Moxico</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Namibe') selected @endif
                                                                            value="Namibe">Namibe</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($formando->provincia == 'Zaire') selected @endif
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
                                                                            @if ($formando->municipio == 'Alto Cauale') selected @endif
                                                                            value="Alto Cauale">Alto Cauale</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Ambuila') selected @endif
                                                                            value="Ambuila">Ambuila</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Bembe') selected @endif
                                                                            value="Bembe">Bembe</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Buengas') selected @endif
                                                                            value="Buengas">Buengas</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Bungo') selected @endif
                                                                            value="Bungo">Bungo</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Damba') selected @endif
                                                                            value="Damba">Damba</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Macocola') selected @endif
                                                                            value="Macocola">Macocola</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Milunga') selected @endif
                                                                            value="Milunga">Milunga</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Mucaba') selected @endif
                                                                            value="Mucaba">Mucaba</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Negage') selected @endif
                                                                            value="Negage">Negage</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Puri') selected @endif
                                                                            value="Puri">Puri</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Quimbele') selected @endif
                                                                            value="Quimbele">Quimbele</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Quitexe') selected @endif
                                                                            value="Quitexe">Quitexe</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Songo') selected @endif
                                                                            value="Songo">Songo</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($formando->municipio == 'Maquela do Zombo') selected @endif
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
                                                                                @if ($formando->pais == $item['name']['common']) selected @endif
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
                                                                            @if ($formando->provincia == 'Bengo') selected @endif
                                                                            value="Bengo">Bengo</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Benguela') selected @endif
                                                                            value="Benguela">Benguela</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Bié') selected @endif
                                                                            value="Bié">Bié</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Cabinda') selected @endif
                                                                            value="Cabinda">Cabinda</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Cuando Cubango') selected @endif
                                                                            value="Cuando Cubango">Cuando Cubango
                                                                        </option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Cuanza Norte') selected @endif
                                                                            value="Cuanza Norte">Cuanza Norte</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Cuanza Sul') selected @endif
                                                                            value="Cuanza Sul">Cuanza Sul</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Cunene') selected @endif
                                                                            value="Cunene">Cunene</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Huambo') selected @endif
                                                                            value="Huambo">Huambo</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Huíla') selected @endif
                                                                            value="Huíla">Huíla</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Luanda') selected @endif
                                                                            value="Luanda">Luanda</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Lunda Norte') selected @endif
                                                                            value="Lunda Norte">Lunda Norte</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Lunda Sul') selected @endif
                                                                            value="Lunda Sul">Lunda Sul</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Malanje') selected @endif
                                                                            value="Malanje">Malanje</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Moxico') selected @endif
                                                                            value="Moxico">Moxico</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Namibe') selected @endif
                                                                            value="Namibe">Namibe</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($formando->enderecos->provincia == 'Zaire') selected @endif
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
                                                                            @if ($formando->enderecos->municipio == 'Alto Cauale') selected @endif
                                                                            value="Alto Cauale">Alto Cauale</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Ambuila') selected @endif
                                                                            value="Ambuila">Ambuila</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Bembe') selected @endif
                                                                            value="Bembe">Bembe</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Buengas') selected @endif
                                                                            value="Buengas">Buengas</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Bungo') selected @endif
                                                                            value="Bungo">Bungo</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Damba') selected @endif
                                                                            value="Damba">Damba</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Macocola') selected @endif
                                                                            value="Macocola">Macocola</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Milunga') selected @endif
                                                                            value="Milunga">Milunga</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Mucaba') selected @endif
                                                                            value="Mucaba">Mucaba</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Negage') selected @endif
                                                                            value="Negage">Negage</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Puri') selected @endif
                                                                            value="Puri">Puri</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Quimbele') selected @endif
                                                                            value="Quimbele">Quimbele</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Quitexe') selected @endif
                                                                            value="Quitexe">Quitexe</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Songo') selected @endif
                                                                            value="Songo">Songo</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Uíge') selected @endif
                                                                            value="Uíge">Uíge</option>
                                                                        <option
                                                                            @if ($formando->enderecos->municipio == 'Maquela do Zombo') selected @endif
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
                                                                    value="{{ $formando->enderecos->bairro }}"
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
                                                                    value="{{ $formando->enderecos->rua }}"
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
                                                                    value="{{ $formando->enderecos->enderecoDetalhado }}"
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
                                                                    value="{{ $formando->contactos->telefone }}"
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
                                                                    value="{{ $formando->contactos->telefoneOP }}"
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
                                                                    value="{{ $formando->contactos->email }}"
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
                                                                    value="{{ $formando->contactos->watsapp }}"
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
                                                                    value="{{ $formando->contactos->outros }}" />
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
                                                                    value="{{ $formando->instituicao }}"
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
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Educação Pré-Escolar') selected @endif
                                                                            value="Educação Pré-Escolar">
                                                                            Educação Pré-Escolar </option>
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Ensino Primário') selected @endif
                                                                            value="Ensino Primário">Ensino Primário
                                                                        </option>
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Ensino Secundário do I Ciclo') selected @endif
                                                                            value="Ensino Secundário do I Ciclo">Ensino
                                                                            Secundário do I Ciclo </option>
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Ensino Secundário do II Ciclo') selected @endif
                                                                            value="Ensino Secundário do II Ciclo">
                                                                            Ensino Secundário do II Ciclo </option>
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Educação Superior') selected @endif
                                                                            value="Educação Superior">Educação Superior
                                                                        </option>
                                                                        <option
                                                                            @if ($formando->nivel_escolaridade == 'Educação Superior') selected @endif
                                                                            value="Educação Superior">Educação Superior
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
                                                                    value="{{ $formando->curso }}"
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
                                                                        <option
                                                                            @if ($formando->periodo == 'Mãnha') selected @endif
                                                                            value="Mãnha" selected>Mãnha </option>
                                                                        <option
                                                                            @if ($formando->periodo == 'Tarde') selected @endif
                                                                            value="Tarde">Tarde</option>
                                                                        <option
                                                                            @if ($formando->periodo == 'Noite') selected @endif
                                                                            value="Noite">Noite</option>
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
                                                                        <option
                                                                            @if ($formando->situacao == 'Estudando') selected @endif
                                                                            value="Estudando" selected
                                                                            title="Indica que a pessoa está atualmente matriculada em uma instituição de ensino.">
                                                                            Estudando </option>
                                                                        <option
                                                                            @if ($formando->situacao == 'Concluido') selected @endif
                                                                            value="Concluido"
                                                                            title=" Indica que a pessoa concluiu o nível de escolaridade.">
                                                                            Concluido</option>
                                                                        <option
                                                                            @if ($formando->situacao == 'Trancado') selected @endif
                                                                            value="Trancado"
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
