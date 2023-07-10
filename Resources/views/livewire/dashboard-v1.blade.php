@php
    use \Illuminate\Support\Facades\Route;
@endphp
<livewire:lte::page :header="'Dashboard'">
    <x-slot name="content">
        <livewire:app::dashboard.darshboard-v1/>
    </x-slot>
</livewire:lte::page>

@push('scripts')
    <script src="{{asset("dist/js/pages/dashboard.js")}}"></script>
@endpush
