@props([
    'id' => null,
    'label' => null,
    'required' => false,
    'disable' => false
])
@php
    $field = $id ?? collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'));
@endphp
@if($label)
    <div class="form-group w-full">
        @endif
        @if($label)
            <x-lte::label :for="$field" :value="$label" :required="$required"/>
        @endif
        <select {{$attributes->class([
            "form-control"
        ])}}
            @required($required) @disabled($disable) {{$attributes}}>
            @if($slot)
                {{$slot}}
            @endif
        </select>
        @if($field)
            <x-lte::error :field="$field"/>
        @endif
        @if($label)
    </div>
@endif
