<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ecole;

class EcoleController extends Controller
{
    public function index()
    {
        $ecoles = (ecole::all());
        return view('/layouts/ecole',compact('ecoles'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createEcole');
    }
    public function store(Request $request){

        $nom = $request->nom;

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        ecole::create([
            'nom' => $nom,  
        ]);
        
        return redirect()->route('ecole.index');
    }
}
