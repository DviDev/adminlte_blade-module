<x-lte.guest class="register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <div>
                    <a href="{{route('home')}}" class="h1">
                        <img src="{{$logo}}" width="100px">
                    </a>
                </div>
            </div>
            <div class="card-body">
                <p class="login-box-msg h5">Criar conta</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-lte::error field="name"/>
                    <div class="input-group mb-3">
                        <input id="name" name="name" type="text" value="{{old('name')}}" placeholder="Nome completo"
                               required autofocus
                               class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <x-lte::error field="email"/>
                    <div class="input-group mb-3">
                        <input id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}"
                               required autocomplete="true"
                               class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <x-lte::error field="cpf"/>
                    <div class="input-group mb-3">
                        <input id="cpf" name="cpf" placeholder="Cpf" x-data x-mask="999.999.999-99"
                               value="{{old('cpf')}}"
                               required autocomplete="true"
                               class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card"></span>
                            </div>
                        </div>
                    </div>
                    <x-lte::error field="password"/>
                    <div class="input-group mb-3">
                        <input id="password" name="password" type="password" placeholder="Senha" required
                               class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <x-lte::error field="password_confirmation"/>
                    <div class="input-group mb-3">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                               placeholder="Confirme a senha" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    Aceito os <a href="{{route('terms')}}" target="_blank">termos</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                {{--      <div class="social-auth-links text-center">--}}
                {{--        <a href="#" class="btn btn-block btn-primary">--}}
                {{--          <i class="fab fa-facebook mr-2"></i>--}}
                {{--          Sign up using Facebook--}}
                {{--        </a>--}}
                {{--        <a href="#" class="btn btn-block btn-danger">--}}
                {{--          <i class="fab fa-google-plus mr-2"></i>--}}
                {{--          Sign up using Google+--}}
                {{--        </a>--}}
                {{--      </div>--}}
                <a href="{{route('login')}}" class="text-center">Já Tenho Conta Cadastrada</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</x-lte.guest>
