@props([
    'id',
    'width',
    'height',
    'lineColor',
    'endColor',
    'data'
])
@push('scripts')
    <script>
        new Sparkline($('#{{$id}}')[0], {
            width: '{{$width}}',
            height: '{{$height}}',
            lineColor: '{{$lineColor}}',
            endColor: '{{$endColor}}'
        }).draw([{{$data}}])
    </script>
@endpush
<div>
    <x-lte::dev.info :alias="$componentAlias->value"/>
    <div id="{{$id}}"></div>
</div>
