@pushonce('livewire_styles')
    @livewireStyles
@endpushonce
@pushonce('livewire_scripts')
    @livewireScripts
    @livewireScriptConfig
@endpushonce
<x-lte::layout.v1.page :tailwind_css="false" :outline="false" :primary="false">
    <livewire:store::dashboard.dashboard-v1/>
</x-lte::layout.v1.page>

@push('scripts')
    <script src="{{asset("assets/modules/lte/dist/js/pages/dashboard.js")}}"></script>
@endpush
