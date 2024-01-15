<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceInfoResume extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_business',
        'designation',
        'department',
        'responsibility',
        'company_location',
        'employment_period',
    ];
}
