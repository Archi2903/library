<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateBirth',
        'slug'
    ];

    // Get all books for Author
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
