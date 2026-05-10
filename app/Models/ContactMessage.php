<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'read_status',
    ];

    protected $casts = [
        'read_status' => 'boolean',
    ];
}