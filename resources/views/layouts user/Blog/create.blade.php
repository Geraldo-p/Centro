@extends('layouts.admin')
@section('titulo', 'Criar Post - Blog')
@section('css')
<link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/jquery-selectric/selectric.css') }}">
<link rel="stylesheet"
    href="{{ asset('Template admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('Template admin/assets/css/components.css') }}">

@endsection


@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Escreva Seu Post</h4>
                    </div>
                    <form action="{{ route('blogs.store') }}" method="POST" id="InserirForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="titulo"
                                        class="form-control @error('titulo') is-invalid @enderror">
                                    @error('titulo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categoria</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="id_categ">
                                        @foreach ($categorias as $item)

                                            <option value="{{$item->id}}">{{$item->nome}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resumo</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple @error('resumo') is-invalid
                                    @enderror" name="resumo" maxlength="376"></textarea>
                                    <label for="">376 caracteres restantes</label>
                                    @error('resumo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Conteúdo</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple @error('conteudo') is-invalid
                                    @enderror" name="conteudo"></textarea>

                                    @error('conteudo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imagem de
                                    Capa</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview @error('foto') is-invalid @enderror">
                                        <label for="image-upload" id="image-label">Escolher Arquivo</label>
                                        <input type="file" name="foto" id="image-upload" />

                                        @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text"
                                        class="form-control inputtags @error('tags') is-invalid @enderror" name="tags">

                                    @error('tags')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Data de
                                    Publicação</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="date"
                                        class="form-control  @error('data_publicacao') is-invalid @enderror"
                                        name="data_publicacao">
                                    @error('data_publicacao')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12 content-right">
                                    <button class="btn btn-primary form-btn" type="button" id="swal-inserir">Criar
                                        Post</button>
                                    <a href="{{ route('blogs.index') }}"><input type="button" value="Cancelar"
                                            class="btn btn-danger form-btn"></a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
@section('script')


<!-- JS Libraies -->
<script src="{{ asset('Template admin/assets/bundles/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('Template admin/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('Template admin/assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}">
</script>
<script src="{{ asset('Template admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('Template admin/assets/js/page/create-post.js') }}"></script>

<script src="{{ asset('Template admin/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ asset('Template admin/assets/js/page/toastr.js') }}"></script>
@if (session('sucesso'))
    <script>
        $(document).ready(function () {
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
        $(document).ready(function () {
            iziToast.error({
                title: 'Erro,',
                message: '{{ session('erro') }}',
                position: 'topRight'
            });
        });
    </script>
    {{ session()->forget('erro') }}

@endif

@endsection