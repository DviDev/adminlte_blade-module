<x-lte::pages.layout-base title="Tabbed IFrames Dark" breadcrumb="Tabbed IFrames Dark">
    <x-slot:content_wrapper>
        <div class="content-wrapper iframe-mode bg-dark" data-widget="iframe" data-auto-dark-mode="true"
             data-loading-screen="750">
            <div class="nav navbar navbar-expand-lg navbar-dark border-bottom border-dark p-0">
                <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Close</a>
                <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollleft"><i
                        class="fas fa-angle-double-left"></i></a>
                <ul class="navbar-nav" role="tablist">
                </ul>
                <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollright"><i
                        class="fas fa-angle-double-right"></i></a>
                <a class="nav-link bg-dark" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
            </div>
            <div class="tab-content">
                <div class="tab-empty">
                    <h2 class="display-4">No tab selected!</h2>
                </div>
                <div class="tab-loading">
                    <div>
                        <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content_wrapper>
    @push('styles')
        <link rel="stylesheet"
              href="{{asset('assets/modules/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    @endpush
    @push('scripts')
        <!-- jQuery -->
        <script src="{{asset('assets/modules/lte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('assets/modules/lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script
            src="{{asset('assets/modules/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/modules/lte/dist/js/adminlte.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/modules/lte/dist/js/demo.js')}}"></script>
    @endpush
</x-lte::pages.layout-base>
