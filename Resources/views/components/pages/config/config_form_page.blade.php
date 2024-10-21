@pushonce('livewire_styles')
    @livewireStyles
@endpushonce
@pushonce('livewire_scripts')
    @livewireScripts
    @livewireScriptConfig
@endpushonce
<x-lte::layout.v1.page title="Configuração">
    <livewire:app::config.config-form :config="$config"/>
</x-lte::layout.v1.page>
