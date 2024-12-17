<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrafficController extends Controller
{
    public function index():View {
        return view('index');
    }

    public function loginPage():View {
        if(!Session::has('token')) {
            return view('login');
        } else return view('main');
    }

    public function registerPage():View {
        if(Session::has('token')) {
            return view('main');
        } else return view('register');
    }
}
