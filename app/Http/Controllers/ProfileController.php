<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all(); // Corrected to use plural since it's a collection
        return view('welcome', [
            'profiles' => $profiles // Pass the variable directly without quotes
        ]);
    }
}
