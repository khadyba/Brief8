<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{

    
    use HasFactory;
    protected $fillable = [
        'nomAssociation',
        'email',
        'mot_de_passeAssoc',
        'slogan',
        'logo',
        'date_creation'
    ];
    
}
