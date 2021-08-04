<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function getBook()
    {
        return $this->hasOne(Book::class);
    }
}
