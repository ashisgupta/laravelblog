<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Session;
use Validator;
use Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
	$post_data =  (object) $request->all();
	$error_message = "";
	if(!isset($post_data->title) && empty($post_data->title)){
		$error_message =  "Title is empty! ";
	}
	if(!isset($post_data->body) && empty($post_data->body)){
		$error_message .=  "Body is empty!";
	}
		//redirect to create with errors
		 if (!empty($error_message)) {
		        Session::flash(‘message’, $error_message);
				return Redirect::to(‘/posts/create’);
		 } else {
		// redirect
		 Session::flash("message", "Successfully posted your blog!");
		 return Redirect::to(‘/posts’);
		 }
        return view('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
