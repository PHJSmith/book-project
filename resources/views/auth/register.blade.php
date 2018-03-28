<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title', env('APP_NAME'))</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="indexbody">
    <div class="indextest">
        <div class="indexheader">
            <div class="registerposition">
                <form method="POST" action="{{ route('register') }}" class="custom-form" id="registerForm">
                    {{ csrf_field() }}
                    <div class="indexalign">
                        <br>
                        <br>
                        {{ csrf_field() }}
                        {{ $errors->has('name') ? ' has-error' : '' }}
                        <div class="form-group" style="text-align: left;">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control">
                            <label for="name" class="animated-label">Name</label>
                        </div>
                        @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                        @endif

                        {{ $errors->has('email') ? ' has-error' : '' }}
                        <div class="form-group" style="text-align: left;">
                            <input id="email" type="email"name="email" value="{{ old('email') }}" required class="form-control">
                            <label for="email" class="animated-label">Email Address</label>
                        </div>
                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif

                        {{ $errors->has('password') ? ' has-error' : '' }}
                        <div class="form-group" style="text-align: left;">
                            <input id="password" type="password" name="password" required class="form-control">
                                <label for="password" class="animated-label">Password</label>
                        </div>
                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif

                        <div class="form-group" style="text-align: left;">
                            <input id="password-confirm" type="password" name="password_confirmation" required class="form-control">
                            <label for="password-confirm" class="animated-label">Confirm Password</label>
                        </div>
                        <div class="buttons">
                            <div class="submit-button" style="text-align: center;">
                                <button name="register" id="register" title="Register" form="registerForm">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/float-label.js"></script>
</body>
