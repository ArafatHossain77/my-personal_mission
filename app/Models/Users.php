<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable=['first_name', 'last_name', 'email', 'mobile', 'country', 'dob', 'user_type', 'password', 'remember_token'];

    public static function create(array $userData)
    {
    }
}
