<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function isUserLoggedIn(){
        if(!Session::get('username')) return false;
        else return true;
    }

    public function updateHandler(Request $request){
        $user = User::where('username', Session::get('username'))->first();
        
        if($request->profile_image){
            $user->profile_image = $request->profile_image;
            $image = $request->file('profile_image');
            $imageName = 'profile_image.' . $image->getClientOriginalExtension();
            $imagePath = 'images/profile/' . md5($user->username) . '/' . $imageName;
            $image->move(public_path('images/profile/' . md5($user->username)), $imageName);
            $user->profile_image = $imagePath;
            $user->save();
        }

        if($request->name) {
            $user->name = $request->name;
            $user->save();    
        }

        if($request->email) {
            $user->email = $request->email;
            $user->save();
        }

        return redirect('/profile');
    }

    public function registerHandler(Request $request){
        $validated = $request->validate([
            'username' => 'required|max:50|unique:users,username',
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        if($request->password != $request->password_confirmation){
            return back()->withErrors([
                'password-confirmation' => 'Password Tidak Sama',
            ])->withInput();
        }

        else if($request->username == 'admin') {
            return back()->withErrors([
                'username' => 'Username Sudah Digunakan',
            ])->withInput();
        }

        else if(User::where('username', $request->username)->first()){
            return back()->withErrors([
                'username' => 'Username Sudah Digunakan',
            ])->withInput();
        }

        else if($validated){
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
            Session::put('username', $request->username);
            return redirect()->intended('/');
        } 

        else {
            return back()->withErrors([
                'log' => 'Hack Detected',
            ])->withInput();
            // reminder : tambahkan method untuk insert ke user agent mencurigakan
        }
    }

    public function bookingPlace($slug){
        if(!$this->isUserLoggedIn()) return redirect('/login');
        $data['place'] = Place::where('slug', $slug)->first();
        $data['user'] = User::where('username', Session::get('username'))->first();
        return view('booking', $data);
    }

    public function logoutHandler(){
        Session::forget('username');
        Session::forget('profile_image');
        Session::flush();
        return redirect('/');
    }

    public function loginHandler(Request $request) {
        $validated = $request->validate([
            'username' => 'required|max:50',
            'password' => 'required'
        ]);

        if($validated){
            $user = User::where('username', $request->username)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){
                    Session::put('username', $request->username);
                    Session::put('profile_image', $user->profile_image);
                    Session::put('last_searched', ' ');
                    $data['user'] = $user;
                    return redirect()->intended('/')->with($data);
                }

                else {
                    return back()->withErrors([
                        'password' => 'Password Salah',
                    ])->withInput();
                }
            }

            else {
                return back()->withErrors([
                    'username' => 'Username Tidak Ditemukan',
                ]);
            }
        }
        return redirect()->intended('/login');
    }

    public function getProfile(){
        if(!$this->isUserLoggedIn()) return redirect('/login');
        $data['user'] = User::where('username', Session::get('username'))->first();
        return view('profile', $data);
    }

    public function getHistory(){
        if(!$this->isUserLoggedIn()) return redirect('/login');
        $data['user'] = User::where('username', Session::get('username'))->first();
        return view('history', $data);
    }

    public function getCart(){
        if(!$this->isUserLoggedIn()) return redirect('/login');
        $data['user'] = User::where('username', Session::get('username'))->first();
        return view('cart', $data);
    }

    public function getRefund(){
        if(!$this->isUserLoggedIn()) return redirect('/login');
        $data['user'] = User::where('username', Session::get('username'))->first();
        return view('refund', $data);
    }
}
