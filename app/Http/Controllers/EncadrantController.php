<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encadrant;

class EncadrantController extends Controller
{
    public function index()
    {
        $encadrants = (encadrant::all());
        return view('/layouts/encadrant',compact('encadrants'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createEncadrant');
    }
    public function store(Request $request){

        $nom = $request->nom;
        $prenom = $request->prenom;
        $matricule = $request->matricule;
        $email = $request->email;
        $structure_affectation_id = $request->structure_affectation_id;

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        encadrant::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'matricule' => $matricule,
            'email' => $email, 
            'structure_affectation_id' => $structure_affectation_id,     
        ]);
        
        return redirect()->route('encadrant.index');
    }
}
