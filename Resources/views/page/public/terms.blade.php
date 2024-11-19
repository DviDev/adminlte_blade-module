<x-lte::pages.guest class="p-4">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{route('login')}}" class="h1">
                <img src="{{asset('assets/modules/lte/dist/img/app_logo.png')}}" width="100px">
            </a>
            <div class="text-bold">{{__('terms')}}</div>
        </div>
        <div class="card-body">
            <p class="mb-1">
                @php
                    $config = \Modules\App\Models\ConfigModel::where('value', 'termo_aceite')->get()->first();
                @endphp
                {!! $config->description !!}
            </p>
        </div>
    </div>
</x-lte::pages.guest>
