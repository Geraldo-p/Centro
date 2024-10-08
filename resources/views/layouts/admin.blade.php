<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('titulo')</title>
    <!-- General CSS Files -->


    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('Template admin/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset(' Template admin/assets/img/logo_.ico') }}' />
    <link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Template admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    {{-- @yield('css') --}}
    <link rel="stylesheet" href="{{ asset('Template admin/assets/bundles/izitoast/css/iziToast.min.css') }}">
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles

</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts._nav')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

        </div>
    </div>

{{-- Definições --}}
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
          <div class=" fade show active">
            <div class="setting-panel-header">Painel de Definições
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Selecionar o Layout</h6>
              <div class="selectgroup layout-color w-50">
                <label class="selectgroup-item">
                  <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                  <span class="selectgroup-button">Branco</span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                  <span class="selectgroup-button">Dark</span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Cor da Barra Lateral</h6>
              <div class="selectgroup selectgroup-pills sidebar-color">
                <label class="selectgroup-item">
                  <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                  <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                  <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Cor do Tema</h6>
              <div class="theme-setting-options">
                <ul class="choose-theme list-unstyled mb-0">
                  <li title="white" class="active">
                    <div class="white"></div>
                  </li>
                  <li title="cyan">
                    <div class="cyan"></div>
                  </li>
                  <li title="black">
                    <div class="black"></div>
                  </li>
                  <li title="purple">
                    <div class="purple"></div>
                  </li>
                  <li title="orange">
                    <div class="orange"></div>
                  </li>
                  <li title="green">
                    <div class="green"></div>
                  </li>
                  <li title="red">
                    <div class="red"></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <div class="theme-setting-options">
                <label class="m-b-0">
                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                    id="mini_sidebar_setting">
                  <span class="custom-switch-indicator"></span>
                  <span class="control-label p-l-10">Barra Lateral Mini</span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <div class="theme-setting-options">
                <label class="m-b-0">
                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                    id="sticky_header_setting">
                  <span class="custom-switch-indicator"></span>
                  <span class="control-label p-l-10">Cabeçalho Fixo</span>
                </label>
              </div>
            </div>
            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
              <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                <i class="fas fa-undo"></i> Padrão
              </a>
            </div>
          </div>
        </div>
      </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('Template admin/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('Template admin/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script
        src="{{ asset('Template admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('Template admin/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/page/index.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/page/datatables.js') }}"></script>
    <script src="{{ asset('Template admin/assets/bundles/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('Template admin/assets/js/page/sweetalert.js') }}"></script>
    {{-- <script src="{{ asset('Template admin/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('Template admin/assets/js/page/toastr.js') }}"></script> --}}
    @yield('script')
    @livewireScripts
</body>

</html>
