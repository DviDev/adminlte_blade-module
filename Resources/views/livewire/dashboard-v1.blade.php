@php
    use \Illuminate\Support\Facades\Route;
@endphp
<livewire:lte::page :header="'Dashboard'">
    <x-slot name="content">
        <livewire:app::dashboard.dashboard-v1/>
    </x-slot>
</livewire:lte::page>

@push('scripts')
    <script src="{{asset("assets/modules/lte/dist/js/pages/dashboard.js")}}"></script>
@endpush
