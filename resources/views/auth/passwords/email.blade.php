{{--@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password ') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
 @endsection
 --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>forgetpassword</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <!-- STYLE CSS -->

    <style>
        ul {
            padding-left: 0;
            margin-bottom: 0; }

        a {
            text-decoration: none; }

        :focus {
            outline: none; }

        .wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #accffe; }

        .inner {
            position: relative;
            width: 435px; }

        form {
            width: 100%;
            position: relative;
            z-index: 9;
            padding: 77px 61px 66px;
            background: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2); }

        h3 {
            text-transform: uppercase;
            font-size: 25px;
            font-family: "Muli-SemiBold";
            color: #333;
            letter-spacing: 3px;
            text-align: center;
            margin-bottom: 33px; }

        .form-holder {
            position: relative;
            margin-bottom: 21px; }
        .form-holder span {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            color: #333; }
        .form-holder span.lnr-lock {
            left: 2px; }

        .form-control {
            border: none;
            border-bottom: 1px solid #e6e6e6;
            display: block;
            width: 100%;
            height: 38px;
            background: none;
            padding: 3px 42px 0px;
            color: #666;
            font-family: "Muli-SemiBold";
            font-size: 16px; }
        .form-control::-webkit-input-placeholder {
            font-size: 14px;
            font-family: "Muli-Regular";
            color: #999;
            transform: translateY(1px); }
        .form-control::-moz-placeholder {
            font-size: 14px;
            font-family: "Muli-Regular";
            color: #999;
            transform: translateY(1px); }
        .form-control:-ms-input-placeholder {
            font-size: 14px;
            font-family: "Muli-Regular";
            color: #999;
            transform: translateY(1px); }
        .form-control:-moz-placeholder {
            font-size: 14px;
            font-family: "Muli-Regular";
            color: #999;
            transform: translateY(1px); }
        .form-control:focus {
            border-bottom: 1px solid #accffe; }

        button {
            border: none;
            width: 100%;
            height: 49px;
            margin-top: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            background: #99ccff;
            color: #fff;
            text-transform: uppercase;
            font-family: "Muli-SemiBold";
            font-size: 15px;
            letter-spacing: 2px;
            transition: all 0.5s;
            position: relative;
            overflow: hidden; }
        button span {
            position: relative;
            z-index: 2; }
        button:before, button:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: rgba(52, 152, 253, 0.25);
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-transform: translate(-100%, 0);
            transform: translate(-100%, 0);
            -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
            transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1); }
        button:after {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s; }
        button:hover:before, button:hover:after {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

        @media (max-width: 991px) {
            .inner {
                width: 400px;
                left: 4%; } }
        @media (max-width: 767px) {
            .inner {
                width: 100%;
                left: 0; }

            .image-1, .image-2 {
                display: none; }

            form {
                padding: 35px;
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                -ms-box-shadow: none;
                -o-box-shadow: none; }

            .wrapper {
                background: none; } }

    </style>
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <form method="POST" action="{{ route('password.email') }}">
            <img src="images/hurtpulse.jpg" alt="" class="hurtpulse">
            <h3>Forget password</h3>
            <div class="form-holder">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
        <img src="images/image-2.png" alt="" class="image-2">
    </div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
