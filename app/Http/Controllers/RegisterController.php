<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionRegister;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(ValidacionRegister $request)
    {
        $usuario= new Usuario();
        $usuario->nombre=$request->nombre;
        $usuario->app=$request->app;
        $usuario->apm=$request->apm;
        $usuario->email=$request->email;
        $usuario->pass=md5($request->pass);
        $usuario->telefono=$request->telefono;
        $usuario->idtu=3;
        $usuario->save();
    }

}
