<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
    	//$posts = App\Post::all();
 	  	$posts = Post::all();
    	return view('post')->with(['posts'=>$posts]);
    	//return view('post.index');
    }


    public function show($id)
    {
    	return view('post');
    }


}
