<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
    	return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function create(){
    	return view('users.create');
    }

    public function store(){
        //dd(request()->except('_token'));
    	//User::create(request()->except('_token'));
      $user =  User::create([
            'firstname'=> request('firstname'),
            'lastname'=> request('lastname'),
            'email'=> request('email'),
            'phone'=> request('phone'),
            'date_of_birth'=> request('date_of_birth'),
            'username'=> request('username')
        ]);

       $user->profile()->create([
            'profile_pic'=>request('profile_pic'),
            'bio'=>request('bio'),
            'address'=>request('address')
       ]);

        /*Profile::create([
            'profile_pic'=> request('profile_pic'),
            'bio'=> request('bio'),
            'address'=> request('address'),
            'owner_id'=> $user->id

        ]);*/


    	return redirect('/users');
    }

    public function show($id){
        $user = User::find($id);
        return view('users.profile', compact('user'));
    }

}
