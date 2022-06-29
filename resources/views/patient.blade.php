@extends('layouts.nav')
@section('title','Patient profile')
@section('navbar')
@section('content')

<div class="container">
    <h3>Profile Patient</h3>

    <div class="card" >
        <div class="card-head"><p>name</p></div>
        <div class="card-body">
            <h4>{{ $patient['name']}}</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-head"><p>email</p></div>
        <div class="card-body">
            <h4>{{$patient['email']}}</h4>
        </div>
    </div>

    <div class="card" >
        <div class="card-head"><p>phone</p></div>
        <div class="card-body">
            <h4>{{$patient['phone']}}</h4>
        </div>
    </div>

    <div class="card">
        <div class="card-head"><p>Gender</p></div>
        <div class="card-body">
            <h4>{{$patient['gender']}}</h4>
        </div>
    </div>

    <div class="card">
        <div class="card-head"><p>What is your chronic diseases? </p></div>
        <div class="card-body">
            <h4>{{$patient['ques1']}}</h4>
        </div>
    </div>

    <div class="card">
        <div class="card-head"><p>Have you had surgery before? </p></div>
        <div class="card-body">
            <h4>{{$patient['ques2']}}</h4>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-head"><p>What is currently hurting you? </p></div>
        <div class="card-body">
            <h4>{{$patient['ques3']}}</h4>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-head"><p>Are you allergic to certain foods or certain medicines? </p></div>
        <div class="card-body">
            <h4>{{$patient['ques4']}}</h4>
        </div>
    </div>
    <br>

        <a href="{{route('edit',$patient-> id)}}">
            <button type="submit" class="btn btn-info col-md-4 offset-md-3">
                {{ __('Edit Page')}}
            </button>
        </a>

           {{-- <a href="{{route('edit',$patient-> id)}}">
                <button type="submit" class="btn btn-info col-md-3 ">
                    {{ __('Add Information')}}
                </button>
            </a>
            --}}


    <br>
    <br>
</div>
    <br>
@endsection
