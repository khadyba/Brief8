<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'references',
        'nombre_reservation',
        'user_id',
        'evenement_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function evenement(){
        return $this->belongsTo(Evenement::class);
    }
}
