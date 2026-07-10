<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumniRegistration extends Model
{
    protected $fillable = [
        'school_name',
        'current_name',
        'class_set',
        'country',
        'contact',
        'profession',
    ];
}
