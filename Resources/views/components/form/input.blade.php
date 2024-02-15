@props([
    'txt' => null,
    'label' => null,
    'placeholder' => null,
    'attr' => null
])
@php
    if ($attr) {
        $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
        if (isset($array['name'])){
            $array['name'] = trans($array['name']);
        }
        if (isset($array['placeholder'])){
            $array['placeholder'] = trans($array['placeholder']);
        }
        if (isset($array['label'])){
            $array['label'] = ucfirst(trans(strtolower($array['label'])));
        }
        $attributes->setAttributes($array);
    }
//    $field = collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
//            ?? $attributes['id'] ?? $attributes['name'] ?? $label;
@endphp
<div @class([
        'w-full',
        "form-group" => $label
        ])>
    <x-lte::input
        :txt="$txt ?? $label"
        :label="$label"
        :placeholder="$placeholder"
        {{$attributes}}/>
</div>
