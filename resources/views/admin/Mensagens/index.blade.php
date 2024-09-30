@extends('layouts.admin')
@section('titulo', 'Mensagens')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body">
                            <div id="plist" class="people-list">
                                <div class="chat-search">
                                    <input type="text" class="form-control" placeholder="Pesquisar" />
                                </div>
                                <div class="m-b-20">
                                    <div id="chat-scroll">
                                        <ul class="chat-list list-unstyled m-b-0">
                                            @foreach ($todos as $item)
                                                <input type="hidden" id="recebido_por" name="recebido_por"
                                                    value="{{ $item->id }}">
                                                <li class="clearfix active">
                                                    <img src="{{ asset('Template admin/assets/img/users/user-4.png') }}"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">{{ $item->name }}</div>
                                                        <div class="status">
                                                            <i class="material-icons online">fiber_manual_record</i>
                                                            {{ $item->nivel_acesso }}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{ asset('Template admin/assets/img/users/user-1.png') }}" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">{{ Auth::user()->name }}</div>
                                    <div class="chat-num-messages">2 new messages</div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-box" id="mychatbox">
                            <div class="card-body chat-content">
                            </div>
                            <div class="card-footer chat-form">
                                <form id="chat-form">
                                    <input type="text" class="form-control" placeholder="Escrever a Mensagem">
                                    <button class="btn btn-primary">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="row">
        <div class="col-md-12 content-right">
            <button class="btn btn-primary form-btn" type="button"
                id="swal-inserir">Multiplas</button>
            <a href=""></a>
        </div>
    </div>
@endsection
@section('script')
    <!-- Page Specific JS File -->
    <script src="{{ asset('Template admin/assets/js/page/chat.js') }}"></script>
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
