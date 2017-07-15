<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function getPost()
    {
        return $this->belongsTo('App\Categories','id');
    }
}
