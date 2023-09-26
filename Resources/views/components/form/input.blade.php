@props([
    'txt' => null,
    'label' => null,
    'placeholder' => null,

])

<div @class([
        "form-group" => $label
        ])>
    <x-lte::input
        :txt="$txt ?? $label"
        :label="$label"
        :placeholder="$placeholder"
        {{$attributes}}/>
</div>
