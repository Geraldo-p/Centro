{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Obrigado por se inscrever! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar por e-mail? Se você não recebeu o e-mail, teremos o prazer de enviar outro.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('REENVIAR E-MAIL DE VERIFICAÇÃO') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Sair') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Verificação</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('Template admin/assets/img/favicon.ico') }}' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Verificação de Email</h4>
                            </div>
                            <div class="card-body">

                                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Obrigado por se inscrever! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar por e-mail? Se você não recebeu o e-mail, teremos o prazer de enviar outro.') }}
                                </div>

                                @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm" style="color: #008000;">
                                    {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.') }}
                                </div>

                                @endif

                                <div class="mt-6 flex items-center justify-between">
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <div style="text-align: center;">
                                           <button class="btn btn-primary" type="submit">REENVIAR E-MAIL DE VERIFICAÇÃO</button>

                                        </div>
                                    </form>

                                    {{-- <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit"
                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            {{ __('Sair') }}
                                        </button>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('Template admin/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/custom.js') }}"></script>
</body>

</html>
