<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

</head>
<body >

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">for better health</span>
    <span class="site-heading-lower">Shefaa</span>
</h1>
<div class="flex-center position-ref full-height">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: #056674;">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="{{url('/result')}}">Search For Doctor</a>
                </li>
                <li class="nav-item px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">patient Log In</a>
                </li>
                <li class="nav-item px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="{{ url('/login/doctor')}}">Doctor Log In</a>
                </li>
                <li class="nav-item px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('register') }}">patient Registration</a>
                </li>
                <li class="nav-item px-lg-7">
                    <a class="nav-link text-uppercase text-expanded" href="{{ url('/register/doctor') }}">Doctor Registration</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/66.jpeg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Specialist doctors</span>
                    <span class="section-heading-lower">your health deserves</span>
                </h2>
                <p class="mb-3">Each doctor here is carefully chosen in order to help you maintain your health and find the right treatment for your illness once you try it, our website will be the first choose always to save your health
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="sign.html" style="background: #ff4b5c" > Sign in!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta" style="background: #e0ece4">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Promise</span>
                        <span class="section-heading-lower">To You</span>
                    </h2>
                    <p class="mb-0">When you login  into our websit to book, we are dedicated to providing you with comfortable service, a welcoming atmosphere, and above all else, excellent doctors. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5" style="background: #056674">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
