<x-lte::pages.layout-base title="Icons" breadcrumb="Icons" :use_sidebar="true">
    <x-slot:content>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Icons</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <p>You can use any font library you like with AdminLTE 3.</p>
                        <strong>Recommendations</strong>
                        <div>
                            <a href="https://fontawesome.com/">Font Awesome</a><br>
                            <a href="https://useiconic.com/open/">Iconic Icons</a><br>
                            <a href="https://ionicons.com/">Ion Icons</a><br>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </x-slot:content>
    @push('scripts')
        <!-- jQuery -->
        <script src="{{asset('assets/modules/lte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/modules/lte/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/modules/lte/dist/js/demo.js')}}"></script>
    @endpush
</x-lte::pages.layout-base>
