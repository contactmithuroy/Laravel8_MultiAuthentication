<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // a role has many user
    // like: Admin,User, Administrat, Service
    // a user have one role 
    public function users(){
        return $this->hasMany(User::class);
    }
}
