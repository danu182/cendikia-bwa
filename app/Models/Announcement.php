<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable=[
        'massage',
        'url',
        'is_active',
    ];
}
