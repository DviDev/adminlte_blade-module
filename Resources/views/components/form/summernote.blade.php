@props([
    'id',
    'rows' => 3,
    'label' => null,
    'required' => false
])
@php
    $field = collect($attributes)
        ->first(function($value, $key) {
            return str($key)->contains('wire:model') ?? $attributes['id'] ?? $attributes['name'] ?? $label;
        });
    $id = $id ?? $field;
@endphp
@pushonce('styles')
    <link rel="stylesheet" href="{{asset("plugins/summernote/summernote-bs4.min.css")}}">
@endpushonce
@push('scripts')
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $(function () {
            $('#{{$id}}').summernote({
                height: 200,
                callbacks: {
                    onChange: function (contents, $editable) {
                        @this.
                        set('{{collect($attributes)
                            ->first(fn($value, $key) => str($key)->contains('wire:model'))}}', contents)
                    }
                }
            })
        })
    </script>
@endpush

<div class="form-group">
    @if($label)
        <label for="{{$id}}" title="{{ $required ? __('validation.required', ['attribute' => $label]) : $label}}">
            {{$label}}
            @if($required)
                <sup style="font-size: 20px">
                    <i class="fas fa-asterisk text-danger" style="font-size: 7px; position: relative; top: 4px"></i>
                </sup>
            @endif
        </label>
    @endif
    <div wire:ignore>
        <textarea class="form-control"
                  rows="{{$rows}}"
                  id="{{$id}}"

              {{$attributes}}
    ></textarea>
    </div>
    <x-lte::error field="{{$field}}"/>
</div>
