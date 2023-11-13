@props([
    'id',
    'type',
    'labels',
    'datasets',
    'legend_display' => false,
    'responsive' => true,
    'scales_yaxes_gridlines_display' => false,
    'scales_yaxes_gridlines_drawborder' => false,
    'scales_yaxes_gridlines_color',
    'scales_yaxes_ticks_fontcolor',
    'scales_yaxes_ticks_stepsize',
    'scales_xaxes_gridlines_display' => false,
    'scales_xaxes_gridlines_color',
    'scales_xaxes_gridlines_drawborder' => false,
    'scales_x_axes_ticks_font_color',
])
@push('scripts')
    <script>
        /* Chart.js Charts */
        // Sales chart
        {{--var salesChartCanvas = document.getElementById('{{$id}}-chart-canvas').getContext('2d')--}}
        {{--// $('#revenue-chart').get(0).getContext('2d');--}}
        {{--var salesChartData = {--}}
        {{--    labels: [{!! $labels !!}],--}}
        {{--    datasets: [--}}
        {{--        {{$datasets}}--}}
        {{--    ]--}}
        {{--}--}}

        {{--var salesChartOptions = {--}}
        {{--    maintainAspectRatio: false,--}}
        {{--    responsive: {{$responsive ? 'true' : 'false' }},--}}
        {{--    legend: {--}}
        {{--        display: {{ $legend_display ? 'true' : 'false' }}--}}
        {{--    },--}}
        {{--    scales: {--}}
        {{--        xAxes: [{--}}
        {{--            gridLines: {--}}
        {{--                display: {{$scales_xaxes_gridlines_display ? 'true' : 'false'}}--}}
        {{--            }--}}
        {{--        }],--}}
        {{--        yAxes: [{--}}
        {{--            gridLines: {--}}
        {{--                display: {{$scales_yaxes_gridlines_display ? 'true' : 'false'}}--}}
        {{--            }--}}
        {{--        }]--}}
        {{--    }--}}
        {{--}--}}

        {{--// This will get the first returned node in the jQuery collection.--}}
        {{--// eslint-disable-next-line no-unused-vars--}}
        {{--var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]--}}
        {{--    type: '{{$type}}',--}}
        {{--    data: salesChartData,--}}
        {{--    options: salesChartOptions--}}
        {{--})--}}
        //***************************************************************************************
        // Sales graph chart
        var salesGraphChartCanvas = $('#{{$id}}-chart-canvas').get(0).getContext('2d')
        // $('#revenue-chart').get(0).getContext('2d');

        var salesGraphChartData = {
            labels: [{!! $labels !!}],
            datasets: [
                {!! $datasets !!}
            ]
        }

        var salesGraphChartOptions = {
            maintainAspectRatio: false,
            responsive: {{$responsive ? 'true' : 'false' }},
            legend: {
                display: {{ $legend_display ? 'true' : 'false' }}
            },
            scales: {
                xAxes: [{
                    ticks: {
                        @if(isset($scales_x_axes_ticks_font_color))
                        fontColor: '{{$scales_x_axes_ticks_font_color}}',
                        @endif
                    },
                    gridLines: {
                        display: {{$scales_xaxes_gridlines_display ? 'true' : 'false'}},
                        @if(isset($scales_xaxes_gridlines_color))
                        color: '{{$scales_xaxes_gridlines_color}}',
                        @endif
                        drawBorder: {{$scales_xaxes_gridlines_drawborder ? 'true' : 'false'}}
                    }
                }],
                yAxes: [{
                    ticks: {
                        @if(isset($scales_yaxes_ticks_stepsize))
                        stepSize: {{$scales_yaxes_ticks_stepsize}},
                        @elseif(isset($scales_yaxes_gridlines_color))
                        fontColor: '{{$scales_yaxes_gridlines_color}}'
                        @endif
                    },
                    gridLines: {
                        display: {{$scales_yaxes_gridlines_display ? 'true' : 'false'}},
                        @if(isset($scales_yaxes_gridlines_color))
                        color: '{{$scales_yaxes_gridlines_color}}',
                        @elseif(isset($scales_yaxes_gridlines_drawborder))
                        drawBorder: {{$scales_yaxes_gridlines_drawborder ? 'true' : 'false'}}
                        @endif
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        // eslint-disable-next-line no-unused-vars
        var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
            type: '{{$type}}',
            data: salesGraphChartData,
            options: salesGraphChartOptions
        })
    </script>
@endpush
<canvas id="{{$id}}-chart-canvas" height="300" style="height: 300px;"></canvas>
