<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{

    use HasFactory;
    protected $fillable = [
        'nomEvenement',
        'description',
        'status',
        'image',
        'date_limite_inscription',
        'date_evenement',
        'is_deleted',
        'association_id',
    ];
}
