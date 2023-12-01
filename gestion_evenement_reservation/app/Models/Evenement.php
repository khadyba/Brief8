<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function association()
    {
        return $this->belongsTo(Association::class, 'association_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'reservations', 'evenement_id', 'user_id');
    }
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

    public function   reservation(){
        return $this->belongsToMany(Reservation::class);
     
     }
}
