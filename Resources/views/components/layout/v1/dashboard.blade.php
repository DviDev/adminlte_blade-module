<x-lte::layout.v1.page :tailwind_css="false" :outline="false" :primary="false">
    <livewire:app::dashboard.dashboard-v1/>
</x-lte::layout.v1.page>

@push('scripts')
    <script src="{{asset("assets/modules/lte/dist/js/pages/dashboard.js")}}"></script>
@endpush
