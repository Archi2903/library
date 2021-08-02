<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function authors()
    {
        // Статья принадлежит модели BlogCategory
        return $this->belongsTo(Books::class);
    }
}
