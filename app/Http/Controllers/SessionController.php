<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('forms.create-session');
    }

    public function authenticate(){
        //valider les entrée
        //Loguer l'utilisateur
        request()->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);
        if(auth()->attempt(request(['email','password']))){
            return redirect()->home();
        }
        return back();
    }


    public function destroy(){
        //deconnecter l’utilisateur
        auth()->logout();
        return redirect('/login');
    }
}
