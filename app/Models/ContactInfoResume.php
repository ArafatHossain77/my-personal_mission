<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfoResume extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
        'social_link',
        'mobile_number',
        'emergency_contact',
    ];
}
