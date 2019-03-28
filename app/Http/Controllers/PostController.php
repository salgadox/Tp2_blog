<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('articles');
    }

    public function show($post_name){
        $post = Post::where('post_name', $post_name)->first(); //get first post with post_name == $post_name
        //dd('Hello');
        return view('show', array('post'=>$post));
    }
}
