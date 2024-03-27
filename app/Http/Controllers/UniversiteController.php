<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\universite;

class UniversiteController extends Controller
{
    public function index()
    {
        $universites = (universite::all());
        return view('/layouts/universite',compact('universites'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createUniversite');
    }
    public function store(Request $request){

        $nom = $request->nom;
        $wilaya = $request->wilaya;

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        universite::create([
            'nom' => $nom,
            'wilaya' => $wilaya,   
        ]);
        
        return redirect()->route('universite.index');
    }
    
        
    
}
