@props([
    'header' => false,
    'tools' => null,
    'body' => false,
    'footer' => false,
    'outline' => false,
    'tabs' => false,
    'light' => false,
    'lightblue' => false,
    'info' => false,
    'success' => false,
    'blue' => false,
    'cyan' => false,
    'danger' => false,
    'dark' => false,
    'default' => false,
    'fuchsia' => false,
    'gray' => false,
    'dark' => false,
    'green' => false,
    'maroon' => false,
    'navy' => false,
    'olive' => false,
    'indigo' => false,
    'lime' => false,
    'orange' => false,
    'pink' => false,
    'primary' => false,
    'purple' => false,
    'red' => false,
    'teal' => false,
    'warning' => false,
    'white' => false,
    'yellow' => false,
    'collapse' => false,
    'card_id',
    'tab_default' => false
])
@if(!isset($card_id))
    @php
        $card_id = 'card_'.random_int(1000, 2000);
    @endphp
@endif
@php
    $tab_name = 'tab_'.strtolower($card_id);
@endphp
<div
    x-data="{ tab: '', tab_name: '{{$tab_name}}' }"
    x-init="tab = tryGetStorage('{{$tab_name}}', '{{$tab_default}}')"
    {{$attributes->class([
    'card mb-0',
    'card-outline' => $outline,
    'card-outline_tabs' => $tabs,
    'card-light' => $light,
    'card-lightblue' => $lightblue,
    'card-info' => $info,
    'card-success' => $success,
    'card-blue' => $blue,
    'card-cyan' => $cyan,
    'card-danger' => $danger,
    'card-dark' => $dark,
    'card-default' => $default,
    'card-fuchsia' => $fuchsia,
    'card-gray' => $gray,
    'card-gray-dark' => $dark,
    'card-green' => $green,
    'card-maroon' => $maroon,
    'card-navy' => $navy,
    'card-olive' => $olive,
    'card-indigo' => $indigo,
    'card-lime' => $lime,
    'card-orange' => $orange,
    'card-pink' => $pink,
    'card-primary' => $primary,
    'card-purple' => $purple,
    'card-red' => $red,
    'card-teal' => $teal,
    'card-warning' => $warning,
    'card-white' => $white,
    'card-yellow' => $yellow,
    ])}}>
    @if($header)
        <div class="card-header">
            <h3 @class([
                "card-title",
                "p-2" => isset($tools)
            ])>{{$header}}</h3>
            @if(isset($tools))
                <div class="card-tools">{{$tools}}</div>
            @endif
        </div>
    @endif

    {{$slot}}
    <script>
        function setStorage (key, value) {
            window.localStorage.setItem('{{config('app.name')}}.'+ key, value)
            return value
        }
        function getStorage (key) {
            return window.localStorage.getItem('{{config('app.name')}}.'+ key)
        }
        function tryGetStorage (tab_name, value) {
            let val = getStorage(tab_name)
            return val ? val : setStorage(tab_name, value)
        }
    </script>
</div>
