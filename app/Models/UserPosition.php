<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPosition extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public function roles(){
        return $this->hasMany(UserRole::class);
    }
}
