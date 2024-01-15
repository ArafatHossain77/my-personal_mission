<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfoResume extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'about_me',
        'present_address',
        'city',
        'region',
        'zip_code',
        'country'
    ];
}
