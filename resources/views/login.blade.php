<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="patientcss/patientregister.css">
</head>

<body>
<div class="wrapper">
    <div class="inner">
            @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
            @csrf

            <img src="images/hurtpulse.jpg" alt="" class="hurtpulse">
            <h3>LogIn</h3>
            <div class="form-holder">

                    <span class="lnr lnr-envelope"></span>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

         {{--password--}}
            <div class="form-holder">
                <span class="lnr lnr-lock"></span>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            {{--log in button--}}
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
        <img src="images/image-2.png" alt="" class="image-2">
    </div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
