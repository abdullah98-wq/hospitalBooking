<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Shefaa')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color: #D9ECF2;
        }
        .card-head{
            border: 2px solid;
            background-color: #1AA6B7;
            text-align: center;
            font-size: 30px;
            font-family: cursive;
        }
        .container{
            border: whitesmoke 4px solid;
            box-shadow: -30px 30px 20px rgba(0,0,0,0.3) ;
            background-color: #ecf6f8;
        }
        .card{
            margin-left: 150px;
            width:700px;
        }
        button{
            width: 100px;
            height: 50px;
            font-size: 30px;
        }
        .patientnav{
            background-color: #FF414D;
            height: 100px;
            margin-bottom: 10px;
            border-radius: 20px;
        }
        .patientnav ul{
            list-style: none;
        }
        li{
            display: inline-flex;
            margin: 10px;
            float: right;
            font-size: 25px;

        }
       .patientnav a{
            color: #0b2e13;
            text-decoration: none;

        }
        .rightli{
            float: left;
        }
        footer{
            width: 100%;
            height: 80px;
            background-color: #FF414D;
        }
        footer p{
            padding-top: 20px;
            text-align: center;
        }
        .wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #D9ECF2; }

        .inner {
            position: relative;
            width: 600px;
            background-color: white;
            border-radius: 20px;
            margin-bottom: 20px;
            border: whitesmoke 4px solid;
            box-shadow: -20px 20px 10px rgba(0,0,0,0.3) ;
        }
        .formedit{
            margin: 10px;
        }
        h3 {
            text-transform: uppercase;
            font-size: 25px;
            font-family: Muli-SemiBold;
            color: #333;
            letter-spacing: 3px;
            text-align: center;
            margin-bottom: 33px;
        }
    </style>
</head>
<body>
{{--Beginning of navbar--}}
@section('navbar')
<nav class="patientnav">
    <ul><li class="rightli"><a href="{{url('/')}}">SHEFAA</a></li></ul>
   <ul>
       {{--<li><a href="{{route('home')}}">{{ __('Home')}}</a></li>--}}
       <li><a href="{{ route('result',Auth::user()->id)}}">{{ __('Search for doctor')}}</a></li>
       <li><a href="{{ route('patient.profile',Auth::user()->id)}}">{{ __('View profile')}}</a></li>
       <li> <a  href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
       </li>

   </ul>
</nav>
{{--Ending of navbar--}}
@show
@section('content')
    this is content but in nav . blade . php and i hope to fix every thing
@show
@section('footer')
    <footer><p>2020 Copy Right</p> </footer>
@show

</body>
</html>
