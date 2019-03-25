<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    { 
    	return view('welcome');
    }

    public function articles()
    {
    	return view('articles');
    }

    public function contact(){
    	return view('contact');
    }
}
