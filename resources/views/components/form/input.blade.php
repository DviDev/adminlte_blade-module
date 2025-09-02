@php use Modules\Base\View\Components\Form\BaseFormBladeComponent; @endphp
@props([
    'attr' => []
])
@php
    prepareAttributes($attributes, $attr);
@endphp
<div @class([
        'w-full',
        "form-group" => $attributes->get('label')
        ])>
    <x-lte::dev.info :alias="$componentAlias->value ?? 'lte.form.input'"/>
    <x-lte::input
        :txt="$attributes->get('label')"
        {{$attributes->filter(fn($value, $key) => !in_array($key ,['value', 'id', 'name']))}}
    />
</div>
