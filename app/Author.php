<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

// Get all books for Author
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
