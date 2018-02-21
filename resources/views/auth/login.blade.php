@extends('layouts.login')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
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

    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
                Entrar
            </button>
        </div>
    </div>

    <div class="text-center">
        <span class="txt1">
        </span>
        <a class="txt2" href="{{ route('password.request') }}">
            Esqueci minha senha
        </a>
    </div>
    <div class="text-center p-t-115">
        <span class="txt1">
            Ainda não tem uma conta?
        </span>
        <a class="txt2" href="{{ route('register') }}">
            Registre-se
        </a>
    </div>
</form>
@endsection
