<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Place;
use App\Models\PlaceDetail;
use App\Models\PlaceImages;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\PlaceFeatures;
use App\Models\PlaceUniqueness;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function redirect(){
        return redirect('/admin/dashboard');
    }

    public function safeAccountControl(){
        if(!Session::has('admin_username') && !Session::has('username')){
            return 500;
        }

        else if(!Session::has('admin_username') && Session::has('username')){
            return 403;
        }
    }

    // get method
    public function findPage(){
        if($this->safeAccountControl() == 500) return redirect('/admin/login');
        else if($this->safeAccountControl() == 403) return redirect('/');
        // reminder : change this
        $data['places'] = Place::all();
        return view('admin.find', $data);
    }

    public function addPage(){
        if($this->safeAccountControl() == 500) return redirect('/admin/login');
        else if($this->safeAccountControl() == 403) return redirect('/');
        return view('admin.add');
    }

    public function addHandler(Request $request){
        if($this->safeAccountControl() == 500) return redirect('/admin/login');
        else if($this->safeAccountControl() == 403) return redirect('/');
        if (strpos($request->maps, 'https://www.google.com/maps/') === false || strpos($request->maps, 'iframe') === false) {
            return back()->withErrors(['maps' => 'The provided maps URL is not valid.']);
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'price' => 'required|numeric',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'header_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
            'features_count' => 'required|numeric',
            'uniqueness_count' => 'required|numeric',
            'maps' => 'required|string',
        ]);


        if($validated){
            // data master place
            $place = new Place();
            $place->name = $request->name;
            $place->short_description = $request->short_description;
            $place->price = $request->price;
            $place->slug = $place->generate_slug($request->name);
            
            if ($request->hasFile('header_image')) {
                $headerImage = $request->file('header_image');
                $headerImagePath = $headerImage->store('images/header', 'public');
                $place->header_image = $headerImagePath;
            } $place->save();
            

            // data transaksional place_details
            $place_details = new PlaceDetail();
            $place_details->place_id = $place->id;
            $place_details->admin_username = Session::get('admin_username');
            $place_details->description = $request->description;
            $place_details->city = $request->city;
            $place_details->maps = $request->maps;
            $place_details->save();


            // data transaksional place uniquenesses
            for($i = 0; $i < $request->uniqueness_count; $i++){
                $place_uniqueness = new PlaceUniqueness();
                $place_uniqueness->place_id = $place->id;
                $place_uniqueness->uniqueness = $request->uniqueness[$i];
                $place_uniqueness->save();
            }
            

            // data transaksional place features
            for($i = 0; $i < $request->features_count; $i++){
                $place_features = new PlaceFeatures();
                $place_features->place_id = $place->id;
                $place_features->features = $request->features[$i];
                $place_features->save();
            }

            // data transaksional place_images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $place_images = new PlaceImages();
                    $place_images->place_id = $place->id;
                    $imagePath = $image->store('images', 'public');
                    $place_images->filename = $imagePath; $place_images->save();
                }
            }
        }

        else {
            return back()->withErrors('error');
        } return redirect()->route('admin.dashboard')->with('success', 'Place added successfully.');
    }

    public function updatePage(){
        if($this->safeAccountControl() == 500) return redirect('/admin/login');
        else if($this->safeAccountControl() == 403) return redirect('/');
        return view('admin.update');
    }

    public function loginPage() {
        return view('admin.login');
    }

    public function dashboardPage() {
        if($this->safeAccountControl() == 500) return redirect('/admin/login');
        else if($this->safeAccountControl() == 403) return redirect('/');
        return view('admin.dashboard');
    }

    public function getRefundPreview($invoice_number){
        $invoice_number = (int) $invoice_number;
        $reservation = Reservation::where('reservation_invoice', '=' , $invoice_number)->first();
        $user = $reservation->reservation_detail->user;
        dd($user);
        return view('admin.refund-preview');
    }

    public function logoutHandler(){
        Session::forget('admin_username');
        Session::flush();
        return redirect('/admin/login');
    }


    // post method
    public function loginHandler(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validated){
            $username = $request->username;
            $password = $request->password;
            $user = Admin::where('username', $username)->first();

            if($user){
                if (Hash::check($password, $user->password)) {
                    Session::put('admin_username', $username);
                    return redirect()->intended('/admin/dashboard');
                } 
                
                else {
                    return back()->withErrors(['password' => 'The provided password is incorrect.'])->withInput();
                }
            }

            else {
                return back()->withErrors(['username' => 'The provided username does not exist.']);
            }
        }
    }
}
