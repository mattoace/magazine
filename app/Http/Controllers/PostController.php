<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Categories;
use App\News;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
  public function show($id){
       $latestnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Latest News")->get();
       $comments=Comments::all();
       $gallerysports = Categories::where('Categories.categoryname', '=', "Sports Gallery")->get();
       $gallerypolitics = Categories::with('getFiles')->where('Categories.categoryname', '=', "Politics Gallery")->get();
       $localsportsnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Local Sports News")->get();
       
       $highlights = Categories::with('topHighlights')->where('Categories.categoryname', '=', "Highlights")->get();
       $relatedarticles = Categories::with('relatedArticles')->where('Categories.categoryname', '=', "Latest News")->get(); 
       
       $postbody =  News::with('getPost')->where('News.id', '=',$id)->get();        

  	   return view('front.post',compact('latestnews',
  	   	'comments',
  	   	'gallerysports',
  	   	'gallerypolitics',
  	   	'localsportsnews',
  	   	'postbody',
  	   	'highlights',
  	   	'relatedarticles'
  	   	));
  }

}
