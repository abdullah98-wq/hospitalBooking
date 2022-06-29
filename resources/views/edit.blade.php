@extends('layouts.nav')
@section('title','Edit Profile')
@section('navbar')
    @section('content')
        <div class="wrapper">
            <div class="inner">
                <h3>Edit Profile</h3>
<form method="post" action="{{route('update',$patient->id)}}" class="formedit">
    @csrf
    <img src="images/hurtpulse.jpg" alt="" class="heartplus">
    <label class="col-md-4 col-form-label text-md-right" >{{ __('name:')}}  </label>
    <input type="text" name="name"  class="col-md-6" value="{{$patient->name}}" />
    <br>
    <label class="col-md-4 col-form-label text-md-right">{{ __('Email:')}} </label>
    <input type="email" name="email"  class="col-md-6" value="{{$patient->email}}"  />
    <br>
    <label class="col-md-4 col-form-label text-md-right">{{ __('Password:')}} </label>
    <input type="password" name="password" class="col-md-6" value="{{$patient->password}}" />
    <br>
    <label class="col-md-4 col-form-label text-md-right">{{__('Password confirm:')}} </label>
    <input type="password" name="password_confirmation" class="col-md-6" value="{{$patient->password_confirmation}}"/>
    <br>
    <label class="col-md-4 col-form-label text-md-right">{{ __('phone:')}} </label>
    <input type="text" name="phone" class="col-md-6" value="{{$patient->phone}}"/>
    <br>
    <p class="col-md-6 offset-md-1"><strong>What is your chronic diseases? :</strong></p>
    <textarea id="ques1" name="ques1" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1" value="{{$patient->ques1}}">{{ $patient->ques1}}</textarea>
    <br>
    <p class="col-md-6 offset-md-1"><strong>Have you had surgery before? : </strong></p>
    <textarea id="ques2" name="ques2" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1" value="{{$patient->ques2}}">{{ $patient->ques2}}</textarea>
    <br>
    <p class="col-md-6 offset-md-1"><strong>What is currently hurting you?: </strong></p>
    <textarea id="ques3" name="ques3" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1" value="{{$patient->ques3}}">{{ $patient->ques2}}</textarea>
    <br>
    <p class="col-md-6 offset-md-1"><strong>Are you allergic to certain foods or certain medicines?: </strong></p>
    <textarea id="ques4" name="ques4" rows="10" cols="20" class="col-md-6 offset-md-4 md-textarea text-md-left form-control z-depth-1" value="{{$patient->ques4}}">{{ $patient->ques2}}</textarea>
    <br>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Edit') }}
            </button>
        </div>
    </div>
</form>
            </div>
        </div>
    @endsection
