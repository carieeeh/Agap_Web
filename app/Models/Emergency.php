<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id',
        'rescuer_id',
        'type',
        'date_accepted',
        'location_latitude',
        'location_longitude',
        'location_address',
        'status',
        'needed_emergency_unit',
        'image'
    ];
    protected $casts = ['needed_emergency_unit' =>  'array'];

    public function resident(){
        return $this->belongsTo(User::class, 'resident_id');
    }

    public function rescuer(){
        return $this->belongsTo(User::class, 'rescuer_id');
    }
}
