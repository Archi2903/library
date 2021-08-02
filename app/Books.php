<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'id',
        'name',
        'dateCreate',
    ];

    public function books()
    {

        return $this->belongsTo(Authors::class);
    }
}
