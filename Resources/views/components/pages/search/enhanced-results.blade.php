<x-lte::pages.layout-base title="Enhanced Search Results" breadcrumb="Search Results">
    <x-slot:content>
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('lte.pages.search.enhanced-results')}}">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Result Type:</label>
                                        <select class="select2" multiple="multiple" data-placeholder="Any"
                                                style="width: 100%;">
                                            <option>Text only</option>
                                            <option>Images</option>
                                            <option>Video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Sort Order:</label>
                                        <select class="select2" style="width: 100%;">
                                            <option selected>ASC</option>
                                            <option>DESC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Order By:</label>
                                        <select class="select2" style="width: 100%;">
                                            <option selected>Title</option>
                                            <option>Date</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="search" class="form-control form-control-lg"
                                           placeholder="Type your keywords here" value="Lorem ipsum">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-md-10 offset-md-1">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col px-4">
                                        <div>
                                            <div class="float-right">2021-04-20 04:04pm</div>
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <img class="img-fluid" src="{{asset('assets/modules/lte/dist/img/photo1.png')}}"
                                             alt="Photo"
                                             style="max-height: 160px;">
                                    </div>
                                    <div class="col px-4">
                                        <div>
                                            <div class="float-right">2021-04-20 10:14pm</div>
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <iframe width="240" height="160"
                                                src="https://www.youtube.com/embed/WEkSYw3o5is?controls=0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                class="border-0" allowfullscreen></iframe>
                                    </div>
                                    <div class="col px-4">
                                        <div>
                                            <div class="float-right">2021-04-20 11:54pm</div>
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot:content>
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/select2/css/select2.min.css')}}">
    @endpush
    @push('scripts')
        <!-- jQuery -->
        <script src="{{asset('assets/modules/lte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('assets/modules/lte/plugins/select2/js/select2.full.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/modules/lte/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/modules/lte/dist/js/demo.js')}}"></script>
        <script>
            $(function () {
                $('.select2').select2()
            });
        </script>
    @endpush
</x-lte::pages.layout-base>
