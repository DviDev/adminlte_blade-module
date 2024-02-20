@props([
    'txt',
    'label' => null,
    'placeholder' => null,
    'required' => false,
    'validate' => true
])
@php
    $field = $attributes['id']
                ?? $attributes['name']
                ?? collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
                ?? strtolower($txt);
@endphp
@if($label !== false && $label !== 'false')
    <x-lte::label for="{{$field}}" :required="$required" :value="$label ?? ucfirst($txt)"/>
@endif

<input type="{{$attributes['type'] ?? (strtolower($txt) == 'email' ? 'email' : 'text')}}"
       @if(isset($attributes['name']) || isset($attributes['id']) || !empty($txt))
           name="{{$attributes['name'] ?? $attributes['id'] ?? $txt}}"
       @endif

       @if(isset($attributes['id']) || isset($attributes['name']) || !empty($txt))
           id="{{$attributes['id'] ?? $attributes['name'] ?? $txt}}"
       @endif
       placeholder="{{$placeholder ?? ($txt == $label || !$label || $label == 'false' ? $txt : $label)}}"

    {{$attributes->class(["form-control", 'rounded-sm', 'border-gray-200'])}}
    {{--       value="{{old(collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))--}}
    {{--                ?? $attributes['id'] ?? $attributes['name'] ?? $txt)}}"--}}

    @required($required)

    {{$attributes}}

>
@if($validate || $required)
    <x-lte::error :field="collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
                ?? $attributes['id'] ?? $attributes['name'] ?? $txt"/>
@endif
