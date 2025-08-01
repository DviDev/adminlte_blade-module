@props([
    'title',
    'name' => null
])
@php
    $name = $name ?: strtolower($title);
@endphp
<li class="nav-item">
    <x-lte::dev.info :alias="$componentAlias->value"/>
    <a :class="tab === '{{$name}}' ? 'nav-link active' : 'nav-link'"
       x-on:click="tab = '{{$name}}'; setStorage(tab_name, '{{$name}}')"
       id="custom-tabs-{{$name}}-tab" data-toggle="pill"
       href="#custom-{{$name}}-home" role="tab" aria-controls="custom-tabs-{{$name}}"
       aria-selected="true">
        {{$title}}
    </a>
</li>
