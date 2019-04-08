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
    	//$posts = Post::all();
        $posts = Post::where('post_author', auth()->id())->get();
    	return view('articles', compact('posts'));
    }

    public function create()
    { 
        return view('create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'post_title' => ['required', 'min:3', 'max:255'],
            'post_name' => ['required', 'min:3', 'max:255'],
            'post_content' => ['required', 'min:3'],
            //'post_author' =>['required'],
            'post_date' => ''
        ]);

    /*  Project::create(request(['title','description']));*/

        Post::create($attributes + ['post_author' => auth()->id()]);
        return redirect('/articles');
    }


    public function edit($post_name)
    { 
        $post = Post::where('post_name', $post_name)->first();

        return view('edit',array('post'=>$post));
    }


    public function update(Request $request, $post_name)
    { 
        $post = Post::where('post_name', $post_name)->first();
       // $post->update(request(['post_title', 'post_name','post_content','post_author','post_date']));

       $post->update($request->all());
       $this->authorize('update', $post);

        return redirect('/articles');

        //dd(request()->all());
    }


    public function show($post_name){



        $post = Post::where('post_name', $post_name)->first(); //get first post with post_name == $post_name
        
        $author = User::find($post->post_author);
        
        //$this->authorize('view', $post);

        $comments = Comment::where('post_id', $post->id)->get();
        //dd($comments);

        return view('show', array('post'=>$post, 'author'=>$author, 'comments'=>$comments));
    }

     public function destroy($post_name)
    { 
        $post = Post::where('post_name', $post_name)->first();
        $this->authorize('delete', $post);
        $post->delete();
        
        return redirect('/articles');
        
    }

}
