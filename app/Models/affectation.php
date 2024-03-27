<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affectation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'type',
        'quota_pfe',
        'quota_im',
        'structure_iap_id'
    ];
}
