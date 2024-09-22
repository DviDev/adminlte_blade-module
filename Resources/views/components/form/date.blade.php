@once
    @push('header_libs')
        <link rel="stylesheet"
              href="{{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    @endpush
@endonce
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
