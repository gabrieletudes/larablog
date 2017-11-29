<?php

namespace Blog\Http\Controllers;

use Blog\Http\Requests\StoreBlogRegistration;
use Blog\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(){
        return view('forms.create-registration');
    }

    public function store(Request $request){
        $this->validate(request(),[
           'name' => 'required|min:2',
           'email' => 'required|email|unique:users',
           'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'remember_token' => str_random(10)
        ]);

        return redirect()->home();
    }
}
