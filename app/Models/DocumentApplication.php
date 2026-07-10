<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentApplication extends Model
{
    protected $fillable = [
        'full_name',
        'graduation_year',
        'dob',
        'class_teacher',
        'document_type',
        'delivery_option',
        'identification_path',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
        ];
    }
}
