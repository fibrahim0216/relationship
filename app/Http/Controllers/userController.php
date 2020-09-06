<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
    	return view('users.index');
    }

    public function create(){
    	return view('users.create');
    }

    public function store(){
    	User::create(request()->except('_token'));
    	return view('users.create');
    }
}
