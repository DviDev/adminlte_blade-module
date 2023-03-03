@props([
    'txt',
    'label' => null,
    'placeholder' => null,

])
<div @class([
        "form-group" => $label
        ])>
    <x-lte::input
        :txt="$txt"
        :label="$label"
        :placeholder="$placeholder"
        {{$attributes}}/>
</div>
