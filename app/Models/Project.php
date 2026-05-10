<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'full_description',
        'technologies',
        'github_url',
        'live_url',
        'image',
        'featured',
        'completion_date',
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
        'completion_date' => 'date',
    ];
}