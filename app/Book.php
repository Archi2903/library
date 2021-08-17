<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'author_id',
        'slug',
        'mark',
        'bookname',
    ];

    // Обязательно имя функции в единственном числе
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
