<x-lte::pages.guest class="login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('login')}}" class="h1">
                    <img src="{{asset('assets/modules/lte/dist/img/app_logo.png')}}" width="150px">
                </a>
            </div>
            <div class="card-body">
                <livewire:person::auth.login/>
                <p class="mb-1">
                    {{-- <a href="{{route('forgot-password')}}">Esqueci a senha</a> --}}
                    {{--                <a href="#">Esqueci a senha</a>--}}
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Esqueci a senha
                        </a>
                    @endif
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center">Não tenho conta cadastrada</a>
                </p>
            </div>
        </div>
    </div>
</x-lte::pages.guest>
