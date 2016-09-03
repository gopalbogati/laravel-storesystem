<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
    protected $fillable = [
        'name','email','password'
    ];
}
