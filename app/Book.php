<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'dateCreate',
    ];

    public function authors()
    {

        return $this->belongsTo(Author::class);
    }
}
