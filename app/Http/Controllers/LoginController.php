<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionLogin;
use Illuminate\Http\Request;
use App\User;
use App\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index(){
        return view('index');

    }

    public function store(ValidacionLogin $request)
    {
        $user=User::where([
            'email'=>$request->email,
            'pass'=>md5($request->pass)
        ])->get();
        if(count($user)<1){
            return back()->withErrors(['email'=>'Usuario no registrado']);
            }
        \session()->put('usuario', $user);
        switch($user[0]->idtu){
        case 1:
            return redirect('admin');
        break;
        case 2:
            return redirect('proveedorr');
        break;
        case 3:
            return redirect('cliente');
        break;
        default:
            return back()->withErrors(['email'=>'Usuario no registrado']);
        }

}

    public function salir(){
        \session()->forget('usuario');
        return view('index');
    }


}
