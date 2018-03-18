<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
    	//$posts = App\Post::all();
        // Se importa mejor que ser llamada desde el codigo
 	  	$posts = Post::all();
    	return view('post')->with(['posts'=>$posts]);
    	//return view('post.index');
    }


    public function show($id)
    {


       $post = Post::find($id);
        
        if (is_null($post))
        {
             abort(404);
        }


    	return view('show')->with(['post'=>$post]);
    }


}
