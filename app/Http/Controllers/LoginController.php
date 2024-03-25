<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
       return view('welcome');
    }
    public function login(Request $request)
    {
      $utilisateur = $request->utilisateur;
      $password = $request->password;
      $credentials = ['utilisateur' => $utilisateur , "password" => $password];
      
      if((Auth::attempt($credentials))){

        // utilisateur et mot de passe valide

        $request->session()->regenerate();
        return to_route('compte.index')->with('success','vous étes bien connecté'.$utilisateur." .");
      }else{

        // utilisateur ou mot de passe invalide

        return back()->withErrors([
          'utilisateur'=> 'utilisateur ou mot de passe incorrect.'
        ]);

      }
    }
}
