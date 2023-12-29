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

    public function shop(){
        return view('shop');
    }
    public function view(){
        return view('viewproduct');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function order(){
        return view ('order');
    }




}

