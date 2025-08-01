@php use Modules\Base\Models\ConfigModel; @endphp
@props([
    'title' => null,
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
<x-lte::plugins.fontawesome_free/>
<x-lte::plugins.toastr_assets/>
@php
    $app_logo = $app_logo ?? ConfigModel::byValue('app_logo');
@endphp
<x-lte::layout.v1
    :title="$title"
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
    <x-lte::card :card_id="'page_'.random_int(1000, 2000)" :header="$header" :outline="$outline" :primary="$primary">
        @if(isset($card_header))
            {{$card_header}}
        @endif
        @if(isset($body))
            <x-lte::card.body class="{{$body->attributes->get('class')}}">
                {{$body}}
            </x-lte::card.body>
        @elseif($slot)
            <x-lte::card.body class="p-0">{{$slot}}</x-lte::card.body>
        @endif
        @if(isset($footer))
            <x-lte::card.footer>{{$footer}}</x-lte::card.footer>
        @endif
    </x-lte::card>
</x-lte::layout.v1>
