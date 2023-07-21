@props([
    'header' => '',
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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
    <title>{{ $header ?? config('app.name') }} | Welcome</title>
    @stack('header_libs')
    @stack('styles')
    @stack('scripts_head')

    @if($tailwind_css)
        @if($use_vite)
            @vite('resources/css/app.css', 'resources/js/app.js')
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
    @endif
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>--}}

    <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<div class="wrapper">
    <!-- Preloader -->
    {{--  <div class="preloader flex-column justify-content-center align-items-center">--}}
    {{--    <img class="animation__shake" src="{{asset("{{dist/img/app_logo.jpg}}")}}" alt="{{config('app.name')}}" height="60" width="60">--}}
    {{--  </div>--}}

    @if(isset($navbar))
        {{$navbar}}
    @endif
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{Route::has('home') ? route('home') : '#'}}" class="brand-link">
            @if($app_logo)
                <div class="">
                    <img src="{{asset($app_logo)}}"  height="40px" style="opacity: .8">
                    <div class="brand-text font-weight-light text-sm">
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
    <div class="content-wrapper p-2">
        {{$slot}}
    </div>
    <!-- content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022
            <a href="{{config('app.url')}}">
                {{config('app.name')}}
            </a>.</strong>
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
<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- ChartJS -->
<script src="{{asset("plugins/chart.js/Chart.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("plugins/sparklines/sparkline.js")}}"></script>
<!-- JQVMap -->
<script src="{{asset("plugins/jqvmap/jquery.vmap.min.js")}}"></script>
<script src="{{asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
{{--<script src="{{asset("plugins/summernote/summernote-bs4.min.js")}}"></script>--}}
<!-- overlayScrollbars -->
<script src="{{asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("dist/js/demo.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset("dist/js/pages/dashboard.js")}}"></script>--}}
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<script>
    function toastrDispatch (obj) {
        toastr.options = {
            'closeButton': obj.options?.closeButton ?? true,
            'debug': obj.options?.debug ?? false,
            'newestOnTop': obj.options?.newestOnTop ?? true,
            'progressBar': obj.options?.progressBar ?? true,
            'positionClass': obj.options?.positionClass ?? 'toast-top-right',
            'preventDuplicates': obj.options?.preventDuplicates ?? true,
            'onclick': obj.options?.onclick ?? null,
            'showDuration': obj.options?.showDuration ?? '300',
            'hideDuration': obj.options?.hideDuration ?? '1000',
            'timeOut': obj.options?.timeOut ?? '5000',
            'extendedTimeOut': obj.options?.extendedTimeOut ?? '1000',
            'showEasing': obj.options?.showEasing ?? 'swing',
            'hideEasing': obj.options?.hideEasing ?? 'linear',
            'showMethod': obj.options?.showMethod ?? 'fadeIn',
            'hideMethod': obj.options?.hideMethod ?? 'fadeOut'
        }

        if (obj.type === 'success') toastr.success(obj.msg)
        if (obj.type === 'info') toastr.info(obj.msg)
        if (obj.type === 'warning') toastr.warning(obj.msg)
        if (obj.type === 'error') toastr.error(obj.msg)
    }

    window.addEventListener('toastr', event => {
        let obj = {
            options: {
                'closeButton': event.detail.closeButton,
                'debug': event.detail.debug,
                'newestOnTop': event.detail.newestOnTop,
                'progressBar': event.detail.progressBar,
                'positionClass': event.detail.positionClass,
                'preventDuplicates': event.detail.preventDuplicates,
                'onclick': event.detail.onclick,
                'showDuration': event.detail.showDuration,
                'hideDuration': event.detail.hideDuration,
                'timeOut': event.detail.timeOut,
                'extendedTimeOut': event.detail.extendedTimeOut,
                'showEasing': event.detail.showEasing,
                'hideEasing': event.detail.hideEasing,
                'showMethod': event.detail.showMethod,
                'hideMethod': event.detail.hideMethod
            },
            msg: event.detail.msg,
            type: event.detail.type
        }
        toastrDispatch(obj)
    })
</script>
@stack('scripts')
@livewireScripts
</body>
</html>
