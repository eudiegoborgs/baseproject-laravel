@extends('layouts.login')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="wrap-input100 validate-input" data-validate = "Digite seu nome completo">
        <input class="input100" id="name" type="name" name="name" value="{{ old('name') }}">
        <span class="focus-input100" data-placeholder="Nome"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Digite um nome de usuario">
        <input class="input100" id="username" type="username" name="username" value="{{ old('username') }}">
        <span class="focus-input100" data-placeholder="Usuario"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Ex: joão@exemplo.com">
        <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}">
        <span class="focus-input100" data-placeholder="Email"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Digite sua senha">
        <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
        </span>
        <input class="input100" type="password" name="password" id="password">
        <span class="focus-input100" data-placeholder="Senha"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Confirme sua senha">
        <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
        </span>
        <input class="input100" type="password" name="password_confirmation" id="password-confirmation">
        <span class="focus-input100" data-placeholder="Confirme sua senha"></span>
    </div>

    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
                Inscreva-se
            </button>
        </div>
    </div>

    <div class="text-center p-t-26">
        <span class="txt1">
            Já tem uma conta?
        </span>
        <a class="txt2" href="{{ route('login') }}">
            Faa o seu login.
        </a>
    </div>
</form>
@endsection
