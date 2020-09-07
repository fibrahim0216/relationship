<?php

namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index(){

    	return view('profiles.profiles', [
    		'profiles'=>Profile::all()
    	]);
    }
}
