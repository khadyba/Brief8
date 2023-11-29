<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'references',
        'date_reservaton',
        'nombre_reservation',
        'id_user',
        'id_evenement',
        
    ];
}
