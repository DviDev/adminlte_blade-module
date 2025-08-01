<x-lte::plugins.tempusdominus/>
@props([
    'attr' => null
])
@php
    use Modules\Base\View\Components\Form\BaseFormBladeComponent;
    BaseFormBladeComponent::prepare($attr, $attributes);
@endphp
<div class="input-group date"
     data-target-input="nearest"
>
    <x-lte::dev.info :alias="$componentAlias->value"/>
    <input type="text" class="form-control datetimepicker-input"
           data-target="#{{$attributes->get('id')}}" {{$attributes}}/>
    <div class="input-group-append" data-target="#{{$attributes->get('id')}}" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#{{$attributes->get('id')}}').datetimepicker({
                locale: '{{config('app.locale')}}'
            });
        });
    </script>
@endpush
