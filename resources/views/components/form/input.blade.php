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
    @if(!empty($attributes->get('value')) && $editingAttribute)
        <div>
            @if($label = $attributes->get('label'))
                <x-lte::label :value="$label"/>
            @endif
            <div>{{$attributes->get('value')}}</div>
        </div>
    @else
    <x-lte::input
        :txt="$attributes->get('label')"
        {{$attributes->filter(fn($value, $key) => !in_array($key ,['value', 'id', 'name']))}}
    />
    @endif
</div>
