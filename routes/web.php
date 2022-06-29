<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//habiba routs
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('patient/{id}','PatientController@profile')->name('patient.profile');
Route::get('edit/{id}','PatientController@edit')->name('edit');
Route::post('update/{id}','PatientController@update')->name('update');


//Mohamed hany and Ahmed Routs

Route::get('/', 'AppController@viewHomePage');
Route::get('/result',"AppController@showingResult")->name('result');



Route::get('/register/doctor', 'Auth\RegisterController@showDoctorRegisterForm')->name('register.doctor');
Route::post('/register/doctor', 'Auth\RegisterController@createDoctor')->name('register.doctor');


Route::view('/home', 'home')->middleware('auth');

Route::group(['middleware' => 'auth:doctor'], function () {
    Route::view('/doctor_profile', 'doctor')->name('doctor.profile');

});

//edited by Ahmed

Route::get('/login/doctor', 'Auth\LoginController@showDoctorLoginForm')->name('login.doctor');
Route::post('/login/doctor', 'Auth\LoginController@doctorLogin');

