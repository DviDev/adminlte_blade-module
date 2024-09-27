<x-lte::pages.layout-base title="Simple Search Form" breadcrumb="Simple Search Form">
    <x-slot:content_wrapper>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <h2 class="text-center display-4">Search</h2>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action="{{route('lte.pages.search.simple-results')}}">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg"
                                           placeholder="Type your keywords here">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </x-slot:content_wrapper>
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
