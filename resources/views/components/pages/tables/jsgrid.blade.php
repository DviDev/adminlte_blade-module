<x-lte::pages.layout-base title="jsGrid" breadcrumb="jsGrid">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/jsgrid/jsgrid.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/jsgrid/jsgrid-theme.min.css')}}">
    @endpush
    <x-slot:content>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">jsGrid</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="jsGrid1"></div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
    </x-slot:content>
    @push('scripts')
        <!-- jQuery -->
        <script src="{{asset('assets/modules/lte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- jsGrid -->
        <script src="{{asset('assets/modules/lte/plugins/jsgrid/demos/db.js')}}"></script>
        <script src="{{asset('assets/modules/lte/plugins/jsgrid/jsgrid.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/modules/lte/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/modules/lte/dist/js/demo.js')}}"></script>
        <!-- Page specific script -->
        <script>
            $(function () {
                $("#jsGrid1").jsGrid({
                    height: "100%",
                    width: "100%",

                    sorting: true,
                    paging: true,

                    data: db.clients,

                    fields: [
                        {name: "Name", type: "text", width: 150},
                        {name: "Age", type: "number", width: 50},
                        {name: "Address", type: "text", width: 200},
                        {name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name"},
                        {name: "Married", type: "checkbox", title: "Is Married"}
                    ]
                });
            });
        </script>
    @endpush
</x-lte::pages.layout-base>
