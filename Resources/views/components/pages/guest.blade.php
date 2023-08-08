<x-lte::pages.layout-base title="Guest" breadcrumb="Guest">
    @push('styles')
        <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    @endpush
    <x-slot:content>
        {{$slot}}
    </x-slot:content>
    @push('scripts')
        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.js')}}"></script>
    @endpush
</x-lte::pages.layout-base>
