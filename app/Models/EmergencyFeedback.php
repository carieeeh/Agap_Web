<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyFeedback extends Model
{
    use HasFactory;

    protected $fillable = ['emergency_id', 'comment', 'rate'] ;

    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
}
