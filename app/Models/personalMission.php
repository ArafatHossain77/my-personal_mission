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

    ];

}
