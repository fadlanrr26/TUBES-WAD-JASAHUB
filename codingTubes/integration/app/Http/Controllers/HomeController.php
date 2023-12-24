<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function login() {
        if(Auth::user()){
            return redirect()->route('home');
        }
        // dd($user);
        return view ('auth/login');
    }

    public function landingPage(){
        return view('landingPage');
    }
}

