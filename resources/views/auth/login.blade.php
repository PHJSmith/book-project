
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ title('Login') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script>
        $(window).on('load', function () {
                var time;
                var num = Math.floor(Math.random() * 20);
                if (num > 15) {
                    time = 3000;
                } else {
                    time = 2000;
                }
              setTimeout(removeLoader, time);
          });
        function removeLoader(){
            $("#loadingDiv").remove();
        }
    </script>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body style="padding: 0;">
    <div class="vertical-center">
        <div class="auth-container container" style="padding-left: 0; padding-right: 0;">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card"></p>
                <form method="POST" action="{{ route('login') }}" name="login-form" id="login-form" class="form-signin">
                    {{ csrf_field() }}

                    @if ($errors->has('invalid-credentials'))
                        <div class="error-msg">
                            <span class="popuptext" style="color: red;">{{ $errors->first('invalid-credentials') }}</span>
                        </div>
                    @endif

                    <span id="reauth-email" class="reauth-email"></span>

                    @if ($errors->has('email'))
                        <div class="error-msg">
                            <span class="popuptext">{{ $errors->first('email') }}</span>
                        </div>
                    @endif

                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofill="on" value="{{ old('email') ?? '' }}">

                    @if ($errors->has('password'))
                        <div class="error-msg">
                            <span>{{ $errors->first('password') }}</span>
                        </div>
                    @endif

                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autofill="on">

                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form>
            </div>
            <div>
              <a href="{{ route('register') }}" class="button">Not registered? Sign up here</a>
            </div>
        </div>
    </div>

</body>
