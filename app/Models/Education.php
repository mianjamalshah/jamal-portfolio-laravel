<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'degree',
        'institution',
        'location',
        'start_year',
        'end_year',
        'description',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];
}