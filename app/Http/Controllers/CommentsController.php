<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Comments;
use Illuminate\Support\Facades\Input;

class CommentsController extends Controller
{    
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
       return Response::json(Comments::get());
        // return Response::json(Comments::get());
    }


     public function show($id){
       return Response::json(Comments::where('Comments.post_id', '=', $id)->get());
     }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
       
        $urlArray  =  explode('/',Input::get('posturl'));
        Comments::create(array(
            'fullnames' => Input::get('author'),
            'comments' => Input::get('comment'),
            'image' => '/images/avatar-1.jpg',
            'email' => Input::get('email'),
            'website' => Input::get('website'),
            'post_id' => end($urlArray) 
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comments::destroy($id);

        return Response::json(array('success' => true));
    }


}
