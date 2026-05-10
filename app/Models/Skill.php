<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'level',
        'sort_order',
        'featured',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'level' => 'integer',
        'sort_order' => 'integer',
    ];
}