<x-lte::plugins.tempusdominus/>
<x-lte::plugins.daterangepicker/>
@props([
    'attr' => [],
])
@php
    prepareAttributes($attributes, $attr);
@endphp
<div>
    <div class="form-group">
        <x-lte::dev.info :alias="$componentAlias->value"/>
        @if($attributes->get('label'))
            @php
                $field = $attributes['id']
                            ?? $attributes['name']
                            ?? collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'));
            @endphp
            @if($attributes->has('label'))
                <x-lte::label for="{{$field}}" :required="$attributes->get('required')" :value="$attributes->get('label')"/>
            @endif
        @endif
        <div class="input-group date" id="{{$attributes->get('id')}}" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input"
                   data-target="#{{$attributes->get('id')}}"/>
            <div class="input-group-append" data-target="#{{$attributes->get('id')}}" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function () {
            $('#{{$attributes->get('id')}}').datetimepicker({
                format: 'L'
            });
        });
    </script>
@endpush
