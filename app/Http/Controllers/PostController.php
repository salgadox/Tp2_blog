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

    public function create()
    { 
        return view('create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'post_title' => ['required', 'min:3', 'max:255'],
            'post_content' => ['required', 'min:3'],
            'post_author' =>['required']
        ]);

    /*  Project::create(request(['title','description']));*/

        Post::create($attributes);
        return redirect('/articles');
    }


    public function show($post_name){
        $post = Post::where('post_name', $post_name)->first(); //get first post with post_name == $post_name
        
        $author = User::find($post->post_author);

        $comments = Comment::where('post_id', $post->id)->get();
        //dd($comments);

        return view('show', array('post'=>$post, 'author'=>$author, 'comments'=>$comments));
    }
}
