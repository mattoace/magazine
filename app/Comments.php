<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     protected $fillable = ['fullnames', 'comments' , 'image','email','website','post_id'];
}
