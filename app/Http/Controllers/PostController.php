<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Comment;
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
        
        $author = User::find($post->post_author);

        $comments = Comment::where('post_id', $post->id)->get();
        //dd($comments);

        return view('show', array('post'=>$post, 'author'=>$author, 'comments'=>$comments));
    }
}
