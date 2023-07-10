<x-lte.guest class="login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('login')}}" class="h1">
                    <img src="{{asset('dist/img/novo_logo_singular_oficial_degrade.png')}}" width="100px">
                </a>
            </div>
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')"/>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <p class="login-box-msg">{{$title}}</p>
                <livewire:login/>
                <!-- /.social-auth-links -->
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-lte.guest>
