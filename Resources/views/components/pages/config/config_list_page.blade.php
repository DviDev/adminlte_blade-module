<x-lte::layout.v1.page>
    <x-slot:header>
        <span class="card-title">Configurações</span>
        <div class="card-tools">
            <a href="{{route('admin.config')}}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Cadastrar
            </a>
        </div>
    </x-slot:header>
    <livewire:app::config.config-list/>
</x-lte::layout.v1.page>
