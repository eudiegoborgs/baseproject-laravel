<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/login/css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/login/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/login/fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-26">
						<i class="zmdi zmdi-font"></i>
                    </span>
					<span class="login100-form-title p-b-26">
						{{ config('app.name', 'Laravel') }}
					</span>
                    @if($errors->all())
                        <div class="alert alert-danger fs-14 text-center" role="alert">                    
                            @foreach ($errors->all() as $error)
                                <small>{{$error}}</small><br>
                            @endforeach
                        </div>
                    @endif
                    @yield('content')
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/login/js/main.js') }}"></script>

</body>
</html>