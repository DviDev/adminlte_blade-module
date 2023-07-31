@props([
    'action' => null,
    'title' => null,
    'label' => null,
    'id' => null,
    'info' => false,
    'danger' => false,
    'success' => false,
    'warning' => false,
    'confirm' => false,
    'confirmation' => false,
    'confirm_type' => null,
    'confirm_label' => null,
    'confirm_msg' => null,
    'icon' => null,
    'prepend_icon' => null,
    'append_icon' => null,
    'sm' => false,
    'md' => false,
    'lg' => false,
])
@php
    $id = $id ?? rand(1000, 2000);
    $confirm = $confirm ?? isset($confirm_type) || isset($confirm_msg) || isset($confirm_label);
    $confirmation = $confirm;
    $classes = str($attributes->get('class'))->explode(' ');
    $sm = $sm || $classes->has('btn-sm');
    $md = $md || $classes->has('btn-md');
    $lg = $lg || $classes->has('btn-lg');
@endphp
<div>
    @if($confirmation)
        <x-lte::modal id="{{$id}}"
                      wire:click.prevent="{{$action}}" :msg="$confirm_msg ?? $title"
                      :info="$confirm_type === 'info' || $info"
                      :danger="$confirm_type === 'danger' || $danger"
        />
    @endif
    <button {{$attributes->class([
            'btn',
            'bg-gray-200' => $attributes->has('disabled'),
            'btn-sm' => $sm && (!$md && !$lg),
            'btn-md' => $md && (!$sm && !$lg),
            'btn-lg' => $lg && (!$sm && !$md),
            'btn-primary' => $info,
            "btn-danger bg-red-500" => $danger,
            'bg-orange-500 text-white' => $warning,
            'bg-green-600 text-white' => $success,
            'bg-light border' => !$info && !$danger && !$warning && !$success && !$attributes->has('disabled'),
        ])}}
            @if($confirm)
                data-toggle="modal" data-target="#modal-{{$id}}"
            @endif
            wire:loading.attr="disabled"
            @if($action)
                @if($confirm)
                    wire:target="{{$action}}"
            @else
                wire:click="{{$action}}"
            @endif
            @endif
            title="{{$title}}"
        {{$attributes}}
    >
        <div wire:loading.remove wire:target="{{$action}}">
            @if($prepend_icon)
                <i @class([
                    "fas fa-$prepend_icon",
                    "mr-1" => $icon || $label || $append_icon
                ])></i>
            @endif

            @if($icon)
                <i @class([
                    "fas fa-$icon",
                     "mr-1" => $label || $append_icon,
                     "mx-1" => !$label && !$append_icon
                ])></i>
            @endif

            {{$label}}

            {{$slot}}

            @if($append_icon)
                <i class="ml-1 fas fa-{{$append_icon}}"
                   wire:loading.remove wire:target="{{$action}}"></i>
            @endif
        </div>
        <span wire:loading wire:target="{{$action}}" class="flex justify-center items-center">
            <x-lte::loading/>
        </span>
    </button>
</div>
