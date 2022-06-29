<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Doctor;
use App\Schedule;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::RESULT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:doctor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:12'],
            'gender' => ['required', 'string'],
            'ques1' => ['required', 'string', 'max:500'],
            'ques2' => ['required', 'string', 'max:500'],
            'ques3' => ['required', 'string', 'max:500'],
            'ques4' => ['required', 'string', 'max:500'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'ques1' => $data['ques1'],
            'ques2' => $data['ques2'],
            'ques3' => $data['ques2'],
            'ques4' => $data['ques2'],
        ]);
    }


    public function showDoctorRegisterForm()
    {
        return view('auth.register-doc', ['url' => 'doctor']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */


    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function validator_doctor(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => ['required', 'string', 'max:12'],
            'gender' => ['required', 'string'],
        ]);
    }

    protected function createDoctor(Request $request)
    {
        $this->validator_doctor($request->all())->validate();
        $doctor = Doctor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'specilization' => $request->specilization,
            'location' => $request->location,
            'price' => $request->price,
            'email' => $request->email,
            'gender' => $request->gender == 'male' ? true : false,
            'password' => Hash::make($request->password),
        ]);

        $schedule = Schedule::create([
            'doctor_id' => $doctor->id,
            'hours_from' => $request->hours_from,
            'hours_to' => $request->hours_to,
        ]);

        foreach ($request->appointment as $date) {
            $schedule->$date = true;
        }
        $schedule->save();
        return redirect()->intended('login/doctor');

    }
}

