<x-lte::plugins.tempusdominus/>
<x-lte::plugins.daterangepicker/>

@php
    use Modules\Base\View\Components\Form\BaseFormBladeComponent;
    BaseFormBladeComponent::prepare($attributes);
@endphp
<div>
    <div class="form-group">
        <x-lte::dev.info :alias="$componentAlias->value"/>
        @if($label)
            <label>{{$label}}</label>
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
