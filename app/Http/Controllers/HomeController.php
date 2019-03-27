<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    { 
        $posts = Post::orderBy('post_date','desc')->take(3)->get();

    	return view('welcome', array('posts'=>$posts));
    }

    public function articles()
    {
    	return view('articles');
    }

    public function contact(){
    	return view('contact');
    }

    public function show($post_name){
        $post = Post::where('post_name', $post_name)->first(); //get first post with post_name == $post_name
        //dd('Hello');
        return view('show', array('post'=>$post));
    }
}


