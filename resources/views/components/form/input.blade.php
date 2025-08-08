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
            $array['name'] = __($array['name']);
        }
        if (isset($array['placeholder'])){
            $array['placeholder'] = __($array['placeholder']);
        }
        if (isset($array['label'])){
            $array['label'] = ucfirst(__(strtolower($array['label'])));
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
        {{$attributes->filter(fn($value, $key) => !in_array($key ,['value', 'id', 'name']))}}
    />
</div>
