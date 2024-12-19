<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerHandler(Request $request){
        dd($request->all());
    }

    public function loginHandler(Request $request) {
        dd($request->all());
    }
}
