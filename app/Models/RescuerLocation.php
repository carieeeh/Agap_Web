<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescuerLocation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'emergency_id', 'rescuer_latitude', 'rescuer_longitude'] ;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
