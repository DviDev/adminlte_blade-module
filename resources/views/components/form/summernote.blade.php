@props([
    'rows' => 3,
])
@php
    $attr = collect($attr);
    $array = $attr->merge($attributes->getAttributes())->all();

    $wire_model = $attributes->get('wire:model');

    $array['id'] = $array['id'] ?: $wire_model;

    $field = $wire_model ?? $id ?? $attributes->get('name') ?? $attributes->get('label');
    $attributes->setAttributes($array);

    prepareAttributes($attributes, $attr);
@endphp

<x-lte::plugins.summernote/>

@push('scripts')
    <script>
        $('#{{$attributes->get('id')}}').summernote({

            {{$airmode ? 'airMode: true,' : ''}}

            height: {{$attributes->get('height', 200)}},
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function (contents, $editable) {
                    @this.
                    set('{{$wire_model}}', contents)
                }
            }
        });
    </script>
@endpush

<div class="form-group w-full">
    <x-lte::dev.info :alias="$componentAlias->value"/>
    @if($label = $attributes->get('label'))
        <label for="{{$attributes->get('id')}}"
               title="{{ $required ? __('validation.required', ['attribute' => $label]) : $label}}">
            {{$label}}
            @if($required)
                <sup style="font-size: 20px">
                    <i class="fas fa-asterisk text-danger" style="font-size: 7px; position: relative; top: 4px"></i>
                </sup>
            @endif
        </label>
    @endif
    <div wire:ignore x-cloak>
        <textarea id="{{$attributes->get('id')}}" wire:model="{{$wire_model}}">
            {{$attributes->get('value')}}
        </textarea>
    </div>
    <x-lte::error field="{{$field}}"/>
</div>
