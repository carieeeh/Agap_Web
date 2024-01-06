<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','agency_id','first_name', 'middle_name', 'last_name', 'contact_number', 'address', 'emergency_contact_number', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
