<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encadrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'matricule',
        'email',
        'structure_affectation_id'
    ];
}
