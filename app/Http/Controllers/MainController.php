<?php
//https://laravel.com/docs/5.4/eloquent
namespace App\Http\Controllers;

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
	         $categories=Categories::all();	
             $news=News::where('category', '=',1)->get();	             
           return view('index',compact('category','news'));

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
