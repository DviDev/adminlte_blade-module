@once
    @push('header_libs')
        <link rel="stylesheet"
              href="{{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    @endpush
@endonce
@props([
    'id' => 'date_'.random_int(1000, 20000)
])
<div class="input-group date" id="{{$id}}" data-target-input="nearest" {{$attributes}}>
    <input type="text" class="form-control datetimepicker-input" data-target="#{{$id}}"/>
    <div class="input-group-append" data-target="#{{$id}}" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#{{$id}}').datetimepicker({
                locale: '{{config('app.locale')}}'
            });
        });
    </script>
@endpush
