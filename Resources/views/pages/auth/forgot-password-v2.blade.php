<x-lte.guest class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <div>
                    <a href="{{route('home')}}" class="h1">
                        <img src="{{$logo}}" width="100px">
                    </a>
                </div>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Digite seu email para recuperar a senha.</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')"/>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email"
                               value="{{old('email')}}" required
                               autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Recuperar senha</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{route('login')}}">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</x-lte.guest>
