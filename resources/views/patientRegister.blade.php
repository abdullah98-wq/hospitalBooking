<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>forget password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="patientcss/patientregister.css">
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img src="images/hurtpulse.jpg" alt="" class="heartplus">
            <h3>New Account?</h3>
            <div class="form-holder">
                {{--name--}}
                <div class="col-md-6">
                    <span class="lnr lnr-user"></span>
                    <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="name..." value="{{ old('name') }}" required autocomplete="name" autofocus>

                </div>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            {{--email--}}
            <div class="form-holder">

                <div class="col-md-6">
                    <span class="lnr lnr-envelope"></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email..." value="{{ old('email') }}" required autocomplete="email">
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            {{--password--}}
            <div class="form-holder">
                <div class="col-md-6">
                    <span class="lnr lnr-lock"></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password..." required autocomplete="new-password">


                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <div class="form-holder">

                <div class="col-md-6">
                    <span class="lnr lnr-lock"></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password confirmation..." required autocomplete="new-password">
                </div>
            </div>
            {{--phone--}}
            <div class="form-holder">

                <div class="col-md-6">
                    <span class="lnr lnr-phone-handset"></span>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone number..." value="{{ old('phone') }}" required>
                </div>
            </div>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <div class="form-group row">
                <p class="col-md-4 offset-3"><strong>Gender: </strong></p>
                <div class="col-md-4">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">{{('male')}}</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">{{('female')}}</label><br>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <p class="col-md-6 offset-md-1"><strong>What is your chronic diseases? :</strong> </p>
                <textarea id="ques1" name="ques1" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1"  placeholder="ques1" required></textarea>

            </div>
            <br>
            <div class="form-group row">
                <p class="col-md-6 offset-md-1"><strong>Have you had surgery before? : </strong></p>
                <textarea id="ques2" name="ques2" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1"  placeholder="ques2" required></textarea>

            </div>
            <br>
            <div class="form-group row">
                <p class="col-md-6 offset-md-1"><strong>What is currently hurting you? </strong></p>
                <textarea id="ques3" name="ques3" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1"  placeholder="ques3" required></textarea>

            </div>
            <br>
            <div class="form-group row">
                <p class="col-md-6 offset-md-1"><strong>Are you allergic to certain foods or certain medicines?if you have please write it : </strong></p>
                <textarea id="ques4" name="ques4" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1"  placeholder="ques4" required></textarea>

            </div>
            <br>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
