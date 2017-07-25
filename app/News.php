<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['categories_id','article','body','image','updated_at','created_at','slug','slugimage'];

    public function getPost()
    {
        return $this->belongsTo('App\Categories','id');
    }
}
