<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Person;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'first_surname'=> ['required', 'string', 'max:255'],
            'second_surname'=> ['required', 'string', 'max:255'],
            'document_type'=> ['required', 'string', 'max:255'],
            'document_number'=> ['required', 'string', 'max:255'],
            'birthday'=> ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        $person = Person::create([
            'name'=>$data['name'],
            'first_surname'=>$data['first_surname'],
            'second_surname'=>$data['second_surname'],
            'birthday'=>$data['birthday'],
            'document_type'=>$data['document_type'],
            'document_number'=>$data['document_number']
        ]);
        return User::create([
            'people_id'=>$person->id,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
