<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     /**
     * Get the news for the blog post.
     */
   public function getNews(){
        return $this->hasMany('App\News','categories_id');
    }

   public function getFiles(){
        return $this->hasMany('App\Files','category');
    }

   public function topFiveWorldNews(){
        return $this->hasMany('App\News','categories_id')->take(5);
    }

   public function bottomFiveWorldNews(){
        return $this->hasMany('App\News','categories_id')->orderBy('id','desc')->take(5);
    }

   public function topFiveWorldSportNews(){
        return $this->hasMany('App\News','categories_id')->take(5);
    }

   public function bottomFiveWorldSportNews(){
        return $this->hasMany('App\News','categories_id')->orderBy('id','desc')->take(5);
    }
}
