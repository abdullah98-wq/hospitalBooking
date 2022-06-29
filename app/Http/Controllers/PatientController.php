<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use http\client\curl\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function edit($id){
        $patient = \App\User::select()->Find($id);
        if (!$patient){
            return redirect()->with(['error'=>'this user is not exist']);
        }
        return view('edit',['patient'=>$patient,]);

     }


     public function update(Request $request,$id){

        $patient= \App\User::select('id','name','email','password','gender','phone','ques1','ques2','ques3','ques4')->find($id);
        //$patient->update($request->all());
         $patient ->update([
             'name'=>$request->name,
             'email'=> $request->email,
             'password'=>Hash::make($request->password),
             'phone'=> $request->phone,
             'ques1'=> $request-> ques1,
             'ques2'=> $request->ques2,
             'ques3'=> $request->ques3,
             'ques4'=> $request->ques4,

         ]);

         return view('patient',['patient'=>$patient,]);

     }


     public function profile($id){
         $patient = \App\User::Find($id);
         if($patient){
             return view('patient',['patient'=>$patient,]);
         }else{
             return redirect()->back();
         }
     }
}
