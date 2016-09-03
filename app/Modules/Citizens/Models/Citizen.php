<?php

namespace App\Modules\Citizens\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'name', 'dob', 'age', 'father_name', 'mother_name', 'grandfather_name', 'permanent_address', 'image', 'description'
    ];
}



