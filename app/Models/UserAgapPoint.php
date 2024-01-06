<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAgapPoint extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'points', 'badges'] ;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
