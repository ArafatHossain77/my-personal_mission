<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInfoResume extends Model
{
    use HasFactory;
    protected $fillable = [
        'level_of_education',
        'major_group',
        'result_division_class',
        'marks',
        'years_of_passing',
        'institute_name',
    ];
}
