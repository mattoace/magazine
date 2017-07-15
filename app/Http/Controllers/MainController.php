<?php
//https://laravel.com/docs/5.4/eloquent
namespace App\Http\Controllers;

use App\Comments;
use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
       /**
	    * Display a listing of the resource.
	    *
	    * @return Response
	    */
	   public function index(){
	         /*$news=News::where('categories_id', '=',1)->get();
	         $news = Categories::find(1)->getnews; */  
            $breakingnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Breaking News")->get();

            $kenyanpolitics = Categories::with('getNews')->where('Categories.categoryname', '=', "Kenyan Politics")->get();

            $entertainmentnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Entertainment News")->get();

            $countynews = Categories::with('getNews')->where('Categories.categoryname', '=', "County News")->get();

            $sportsnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Sports News")->get();

            $featuredblock1 = Categories::with('getNews')->where('Categories.categoryname', '=', "Featured Block Left")->get();

            $latestnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Latest News")->get();

            $featuredblock2 = Categories::with('getNews')->where('Categories.categoryname', '=', "Featured Block Main1")->get();

            $featuredblock3 = Categories::with('getNews')->where('Categories.categoryname', '=', "Featured Block Main2")->get();

            $worldsport1 = Categories::with('topFiveWorldSportNews')->where('Categories.categoryname', '=', "World Sport")->get();

            $worldsport2 = Categories::with('bottomFiveWorldSportNews')->where('Categories.categoryname', '=', "World Sport")->get();

            $highlights = Categories::with('getNews')->where('Categories.categoryname', '=', "Highlights")->get();

            $fromworld1 = Categories::with('topFiveWorldNews')->where('Categories.categoryname', '=', "View archve from world")->get();

            $fromworld2 = Categories::with('bottomFiveWorldNews')->where('Categories.categoryname', '=', "View archve from world")->get();

            $comments=Comments::all();	

            $gallerysports = Categories::where('Categories.categoryname', '=', "Sports Gallery")->get();

            $gallerypolitics = Categories::with('getFiles')->where('Categories.categoryname', '=', "Politics Gallery")->get();

            $localsportsnews = Categories::with('getNews')->where('Categories.categoryname', '=', "Local Sports News")->get(); 

           return view('index',compact('kenyanpolitics',
           	'breakingnews',
           	'entertainmentnews',
           	'countynews',
           	'sportsnews',
           	'featuredblock1',
           	'latestnews',
           	'comments',
           	'gallerysports',
           	'gallerypolitics',
           	'highlights',
           	'featuredblock2',
           	'fromworld1',
           	'fromworld2',
           	'featuredblock3',
           	'worldsport1',
            'worldsport2',
            'localsportsnews'            
           	));

	   }
	   public function create(){
	      echo 'create';
	   }
	   public function store(Request $request){
	      echo 'store';
	   }
	   public function show($id){
	      echo 'show';
	   }
	   public function edit($id){
	      echo 'edit';
	   }
	   public function update(Request $request, $id){
	      echo 'update';
	   }
	   public function destroy($id){
	      echo 'destroy';
	   }


}//
