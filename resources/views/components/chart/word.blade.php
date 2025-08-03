@push('scripts')
    <script>
        // jvectormap data
        var visitorsData = {
            US: 398, // USA
            SA: 400, // Saudi Arabia
            CA: 1000, // Canada
            DE: 500, // Germany
            FR: 760, // France
            CN: 300, // China
            AU: 700, // Australia
            BR: 600, // Brazil
            IN: 800, // India
            GB: 320, // Great Britain
            RU: 3000 // Russia
        }
        // World map by jvectormap
        $('#world-map').vectorMap({
            map: 'usa_en',
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(255, 255, 255, 0.7)',
                    'fill-opacity': 1,
                    stroke: 'rgba(0,0,0,.2)',
                    'stroke-width': 1,
                    'stroke-opacity': 1
                }
            },
            series: {
                regions: [{
                    values: visitorsData,
                    scale: ['#ffffff', '#0154ad'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionLabelShow: function (e, el, code) {
                if (typeof visitorsData[code] !== 'undefined') {
                    el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
                }
            }
        })
    </script>
@endpush
<div>
    <x-lte::dev.info :alias="$componentAlias->value"/>
    <div id="world-map" style="height: 250px; width: 100%;"></div>
</div>
