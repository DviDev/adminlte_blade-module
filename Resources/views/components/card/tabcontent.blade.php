@props([
    'title',
    'name' => null
])
@php
    $name = $name ?: $title;
@endphp
<div :class="tab === '{{strtolower($name)}}' ? 'tab-pane fade show active' : 'tab-pane fade'"
     style="display: none"
     x-show="tab === '{{strtolower($name)}}'"
     id="{{'custom-tabs-'.$name}}-home" role="tabpanel"
     aria-labelledby="{{'custom-tabs-'.$name.'-tab'}}"
     {{$attributes}}
>
    {{$slot}}
</div>
