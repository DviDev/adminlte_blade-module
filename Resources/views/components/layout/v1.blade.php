@props([
    'title' => '',
    'tailwind_css' => true,
    'use_vite' => false,
    'app_logo' => null,
])
@php
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\Gate;
    use \Illuminate\Support\Facades\Route;
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => config('lte.theme.dark_mode')])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Google Font: Roboto -->
    {{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">--}}

    <!-- Font Awesome -->
    @stack('fontawesome_free_css')

    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>--}}
    <!-- iCheck -->
    @stack('icheck-bootstrap_css')
    <!-- Theme style -->
    @if(config('app.env') == 'local')
        <link rel="stylesheet" href="{{asset("assets/modules/lte/dist/css/adminlte.css")}}">
    @else
        <link rel="stylesheet" href="{{asset("assets/modules/lte/dist/css/adminlte.min.css")}}">
    @endif
    <title>{{ config('app.name') . ($title ? " - $title" : '') }}</title>
    @stack('header_libs')
    @stack('header_libs2')
    @stack('styles')
    @stack('scripts_head')
    @stack('ionicons_2.0.1_css')
    @stack('jqvmap_css')
    @stack('overlayScrollbars_css')
    @stack('daterangepicker_css')
    @stack('toastr_css')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }
    </style>

    @if($tailwind_css)
        @if($use_vite)
            @vite('resources/css/app.css')
            @vite('resources/js/app.js')
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
    @endif

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<div class="wrapper">
    <!-- Preloader -->
    {{--  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset($app_logo)}}" alt="{{config('app.name')}}" height="60" width="60">
    </div>--}}

    @if(isset($navbar))
        {{$navbar}}
    @endif
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{Route::has('home') ? route('home') : '#'}}" class="brand-link p-0">
            @if($app_logo)
                <div class="flex flex-column justify-content-center h-[60px]">
                    <img src="{{asset($app_logo)}}" height="auto" width="180px" style="opacity: .8"
                         class="rounded mx-auto">
                    <div class="brand-text font-weight-light text-sm mx-auto">
                        {{config('app.description')}}
                    </div>
                </div>
            @else
                <x-dvui::icon.user.circle class="brand-image img-circle elevation-3 w-5"/>
                <span class="brand-text font-weight-light">{{config('app.name')}}</span>
            @endif
        </a>
        @if(isset($sidebar))
            {{$sidebar}}
        @endif
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-2 flex flex-column">
        {{$slot}}
    </div>
    <!-- content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022
            <a href="{{config('app.url')}}">
                {{config('app.name')}}.
            </a>
        </strong>
        Todos os direitos reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.0.1
        </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{asset("assets/modules/lte/plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("assets/modules/lte/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
@stack('bootstrap_4_js')
<script src="{{asset("assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@stack('chart_js')
@stack('sparkline_js')
@stack('jqvmap_js')
@stack('moment_js')
@stack('daterangepicker')
@stack('tempusdominus-bootstrap-4_js')
@stack('overlayScrollbars_js')
@stack('toastr_js')

<script src="{{asset("assets/modules/lte/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/modules/lte/dist/js/demo.js")}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset("assets/modules/lte/dist/js/pages/dashboard.js")}}"></script>--}}

@stack('scripts')
{{--@livewireScripts--}}
@livewireScriptConfig
</body>
</html>
