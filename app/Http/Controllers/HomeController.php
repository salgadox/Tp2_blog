<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    { 
        $posts = Post::all();

    	return view('welcome', array('posts'=>$posts));
    }

    public function articles()
    {
    	return view('articles');
    }

    public function contact(){
    	return view('contact');
    }
}
