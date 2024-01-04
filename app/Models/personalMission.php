<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalMission extends Model
{
    use HasFactory;

//    protected $fillable = [
//        'user_id',
//        'personal_mission',
//        'edit_flag',
//    ];
    protected $fillable = [
        'user_id',
        'personal_mission',
        'edit_flag',


        'full_name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'about_me',
        'present_address',
        'city',
        'region',
        'zip_code',
        'country',
        'email',
        'social_link',
        'mobile_number',
        'email',
        'emergency_contact',
        'level_of_education',
        'major_group',
        'result_division_class',
        'marks',
        'years_of_passing',
        'institute_name',
        'company_name',
        'company_business',
        'designation',
        'department',
        'responsibility',
        'company_location',
        'employment_period',
        'highlights',

    ];

}
