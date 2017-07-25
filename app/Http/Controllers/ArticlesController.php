<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\News;
use Illuminate\Support\Facades\Input;
use Datetime;

class ArticlesController extends Controller
{
   

    public function index()
    {     
      return Response::json(array("data"=>News::get(),"total"=>News::get()->count()));      
    }

    public function articlesave(){
       
       $modeldecoded = json_decode(Input::get('models'));
       News::where('id',$modeldecoded[0]->id)->update(['article'=>$modeldecoded[0]->article]);
       return Response::json($modeldecoded);
    }

    public function articledestroy(){

      $modeldecoded = json_decode(Input::get('models'));
      News::destroy($modeldecoded[0]->id);     
      return Response::json($modeldecoded);
    }

    public function articlecreate(){      

        $modeldecoded = json_decode(Input::get('models'));
        $data =  News::create(array( 'article' =>$modeldecoded[0]->article));

        $updatedatObj = new DateTime($data->updated_at);       
        $createdatObj = new DateTime($data->created_at); 

        $dataArray[] = array("article"=>$data->article,"updated_at"=>$updatedatObj->format('Y-m-d'),"created_at"=>$createdatObj->format('Y-m-d'),"id"=>$data->id);

        return Response::json(array("data"=>$dataArray));

    }


}
