@props([
    'title' => null,
    'tailwind_css' => true,
    'header' => null,
    'body',
    'footer',
    'outline' => true,
    'primary' => true,
    "use_vite" => true
])
@php
    use Modules\App\Models\ConfigModel;
    use Modules\App\Entities\Config\ConfigEntityModel;

    $app_logo = ConfigModel::whereFn(fn(ConfigEntityModel $c) => [[$c->name, 'app_logo']])->first()->value;
@endphp
<x-lte::layout.page-card
    :tailwind_css="$tailwind_css"
    :header="$header"
    :sidebar_menu_items="[]"
    :show_cart_icon="auth()->user()?->isCustomer()"
    :show_right_sidebar_icon="auth()->user()?->isCustomer()"
    :show_notifications="true"
    :app_logo="$app_logo"
    :outline="$outline"
    :primary="$primary"
    :use_vite="$use_vite"
>
    {{--@if(isset($header))
        <x-slot:card_header>
            <x-lte::card.header :title="$header" :navs="false">
                {{$header}}
            </x-lte::card.header>
        </x-slot:card_header>
    @endif--}}
    @if(isset($body))
        <x-slot:body class="{{$body->attributes->get('class')}}">
            {{$body}}
        </x-slot:body>
    @else
        <x-slot:body class="p-0 border-b flex flex-col">
            {{$slot}}
        </x-slot:body>
    @endif

    @if(isset($footer))
        <x-slot:footer class="{{$footer->attributes->get('class')}}">
            {{$footer}}
        </x-slot:footer>
    @else
        <page_footer></page_footer>
    @endif
</x-lte::layout.page-card>
