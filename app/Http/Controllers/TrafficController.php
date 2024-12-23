<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrafficController extends Controller
{
    public function getDetail(): View{
        return view('detail');
    }   

    public function index():View {
        if(1+1 == 2) return view('userIndex');
        else return view('index');
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

    public function dashboardPage():View {
        return view('dashboard');
    }

    public function findPlace(Request $request){
        dd($request->all());
    }

    public function findVisitation():View{
        return view('find-visitation');
    }
}
