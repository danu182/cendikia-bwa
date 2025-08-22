<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{

    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'address',
        'email',
        'phone',
        'logo',
    ];


    /**
     * Get all of the comments for the Publisher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'book_id', 'id');
    }
}
