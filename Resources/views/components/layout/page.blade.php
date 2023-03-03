@props([
    'header' => null,
    'tailwind_css' => true,
    'navbar_menu_items' => [],
    'sidebar_menu_items' => [],
    'show_cart_icon' => false,
    'show_right_sidebar_icon' => true,
    'show_notifications' => false,
    'app_logo' => null,
    'outline' => true,
    'primary' => true,
    'use_vite' => false,
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
        <!-- Daterange picker -->
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
            :items="$navbar_menu_items"
            :show_cart_icon="$show_cart_icon"
            :show_right_sidebar_icon="$show_right_sidebar_icon"
            :show_notifications="$show_notifications"
        />
    </x-slot:navbar>
    <x-slot:sidebar>
        <x-lte::layout.sidebar :items="$sidebar_menu_items"/>
    </x-slot:sidebar>
    <x-lte::page_alert toastr/>
    <x-lte::card :card_id="'page_'.random_int(1000, 2000)" :header="$header" :outline="$outline" :primary="$primary">
        @if(isset($card_header))
            {{$card_header}}
        @endif
        @if(isset($body))
            <x-lte::card.body class="{{$body->attributes->get('class')}}">
                {{$body}}
            </x-lte::card.body>
        @elseif($slot)
            <x-lte::card.body class="p-0">
                {{$slot}}
            </x-lte::card.body>
        @endif
        @if(isset($footer))
            <x-lte::card.footer>
                {{$footer}}
            </x-lte::card.footer>
        @endif
    </x-lte::card>
</x-lte::layout.v1>
