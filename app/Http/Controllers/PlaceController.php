<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function getPlace($place):View{
        $data = [
            'place' => Place::where('slug', $place)->first(),
            'places' => Place::limit(12)->get()
        ]; return view('detail', $data);
    }
}
