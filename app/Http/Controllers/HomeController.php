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
    
}


