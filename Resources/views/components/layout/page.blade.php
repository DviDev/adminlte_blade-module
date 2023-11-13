@props([
    'header' => null,
    'tailwind_css' => true,
    'sidebar_menu_items' => [],
    'show_cart_icon' => false,
    'show_right_sidebar_icon' => true,
    'show_notifications' => false,
    'app_logo' => null,
    'outline' => true,
    'primary' => true,
    'use_vite' => true,
])
@once
    @push('header_libs')
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset("plugins/jqvmap/jqvmap.min.css")}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- Date-range picker -->
        <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker.css")}}">
        {{--    <link rel="stylesheet" href="{{asset("plugins/summernote/summernote-bs4.min.css")}}">--}}
        <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    @endpush
@endonce

<x-lte::layout.v1
    :header="$header"
    :tailwind_css="$tailwind_css"
    :app_logo="$app_logo"
    :use_vite="$use_vite"
>
    <x-slot:navbar>
        <x-lte::layout.navbar
            :show_cart_icon="$show_cart_icon"
            :show_right_sidebar_icon="$show_right_sidebar_icon"
            :show_notifications="$show_notifications"
        />
    </x-slot:navbar>
    <x-slot:sidebar>
        <x-lte::layout.sidebar/>
    </x-slot:sidebar>
    <x-lte::page_alert toastr/>
    <div>
        {{$slot}}
    </div>
</x-lte::layout.v1>
