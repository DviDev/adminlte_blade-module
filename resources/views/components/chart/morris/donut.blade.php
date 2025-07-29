@props([
    'id',
    'type',
    'labels',
    'datasets',
    'legend_display' => false,
    'responsive' => true,
    'scales_xAxes_gridLines' => false,
    'scales_yAxes_gridLines' => false,
])

@push('scripts')
    <script>
        /* Chart.js Charts */


        //*********************************************************************************
        // Donut Chart
        var pieChartCanvas = $('#{{$id}}-chart-canvas').get(0).getContext('2d')
        var pieData = {
            labels: [{!! "'$labels'" !!}],
            datasets: [
                {!! $datasets !!}
            ]
        }
        var pieOptions = {
            legend: {
                display: false
            },
            maintainAspectRatio: false,
            responsive: true
        }
        // Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        // eslint-disable-next-line no-unused-vars
        var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })
    </script>
@endpush
<canvas id="{{$id}}-chart-canvas" height="300" style="height: 300px;"></canvas>
