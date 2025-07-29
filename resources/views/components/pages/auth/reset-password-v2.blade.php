<x-lte::pages.guest class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('home')}}" class="h1">
                    <div>
                        <img src="{{asset('assets/modules/lte/dist/img/app_logo.png')}}" width="100px"
                             alt="{{config('app.name')}}" title="{{config('app.name')}}">
                    </div>
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Digite a nova senha</p>
                <!-- Validation Errors -->
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" id="token" name="token" value="{{ $token }}">
                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input id="email" name="email" type="email" class="form-control" placeholder="email"
                               required autofocus/>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                               class="form-control" placeholder="Confirme a senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Alterar senha</button>
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
</x-lte::pages.guest>
