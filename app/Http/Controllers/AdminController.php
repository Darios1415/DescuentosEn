<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


        public function __construct()
        {
            return $this->middleware('rol');
        }

    public function index(){
        return view('auth/login');
    }
}
