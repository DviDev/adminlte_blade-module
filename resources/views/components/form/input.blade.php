@props([
    'txt' => null,
    'label' => null,
    'placeholder' => null,
    'attr' => []
])
@php
    if (count($attr) > 0) {
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
@endphp
<div @class([
        'w-full',
        "form-group" => $label
        ])>
    <x-lte::dev.info :alias="$componentAlias->value ?? 'lte.form.input'"/>
    <x-lte::input
        :txt="$txt ?? $label"
        :label="$label"
        :placeholder="$placeholder"
        {{$attributes}}/>
</div>
