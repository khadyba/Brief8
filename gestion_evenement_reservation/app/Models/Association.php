<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{

    public function evenement()
    {
        return $this->hasMany(Evenement::class);
    }
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
