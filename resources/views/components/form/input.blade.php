@php use Modules\Base\Contracts\BaseFormBladeComponent; @endphp
@props([
    'attr' => [],
    'editingAttribute' => null,
])
@php
    prepareAttributes($attributes, $attr);
@endphp
<div @class([
        'w-full',
        "form-group" => $attributes->get('label')
        ])>
    <x-lte::dev.info :alias="$componentAlias->value ?? 'lte.form.input'"/>
    @if($editingAttribute == $attributes->get('name'))
        <x-lte::input
            :txt="$attributes->get('label')"
            {{$attributes->filter(fn($value, $key) => !in_array($key ,['value', 'id', 'name']))}}
        />
    @else
        <div x-data="{hover: false}" @mouseenter="hover = true" @mouseleave="hover = false"
            class="border border-gray-300 bg-gray-100 rounded-md p-2 flex items-center justify-between space-x-2">
            <div>
                @if($label = $attributes->get('label'))
                    <x-lte::label :value="$label"/>
                @endif
                <div>{{$attributes->get('value')}}</div>
            </div>
            <div class="cursor-pointer text-gray-700" :class="hover ? 'block' : 'hidden'" x-cloak>
                <x-dvui::icon.pencil.index
                    s5
                    wire:click="editingFormAttribute('{{$attributes->get('name')}}')"
                    wire:loading.attr="disabled"
                    wire:loading.class="hidden"
                />
                <x-dvui::icon.arrow.path s5
                    wire:loading
                    wire:target="editingFormAttribute('{{$attributes->get('name')}}')"
                    wire:loading.class="animate-spin"
                />
            </div>
        </div>
    @endif
</div>
