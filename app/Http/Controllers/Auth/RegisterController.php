<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'nombre' => ['required', 'string', 'max:255','regex:/^[a-zA-ZÑñ\s]+$/','unique:users'],
            'nombreusuario' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users','regex:/(.*)@(hotmail|gmail|outlook|yahoo)\.com$/i'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'fecharegistro'=> ['required', 'date'], //Se pide necesariamente hasta el momento la fecha de registro en el formuario
            'fechanac'=> ['required', 'date'],
            
        ],
        [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'nombreusuario.required' => 'El campo nombre de usuario es obligatorio.',
            'nombreusuario.string' => 'El campo nombre de usuario debe ser una cadena de caracteres.',
            'nombre.unique' => 'El nombre de usuario ya está en uso.',
            'nombreusuario.unique' => 'El nombreusuario ya está en uso.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
            'fechanac.required' => 'El campo fecha de nacimiento es obligatorio.',
            'fechanac.date' => 'El campo fecha de nacimiento debe ser una fecha válida.',
        ]);
        
        
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'nombreusuario' => $data['nombreusuario'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'fechanac'=> $data['fechanac'],
            'tipo' => $data['tipo'],
            
            //'fecharegistro'=> $data['fecharegistro'],
        ]);
        
    }
}
