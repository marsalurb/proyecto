<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Employer;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $roles = Role::all()->pluck('name','id');

        return view('auth.register',['roles'=>$roles]);

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|string|min:6|confirmed',
            'dni' => 'required|string|max:9|unique:users',
            'firstname' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'surname2' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'role_id'=>'required|exists:roles,id',
            'salary'=>'required|max:5'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->firstname = $data['firstname'];
        $user->surname = $data['surname'];
        $user->surname2 = $data['surname2'];
        $user->email = $data['email'];
        $user ->dni = $data['dni'];
        $user->number = $data['number'];
        $user->address = $data['address'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $employer = new Employer($data);
        $employer->salary=$data['salary'];
        $employer->role_id=$data['role_id'];
        //$employer = DB::table('employers')->select('optical', 'assistant', 'admin')->get();

        $employer->user()->associate($user);
        $employer->save();

    }
}
