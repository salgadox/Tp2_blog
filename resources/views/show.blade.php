@extends('layouts.main')
@section('title','article')

@section('content')
    @section('subtitle',$post->post_title)
    @section('subheader',$author->name )



<div class="row medium-8 large-7 columns">
	<div class="blog-post">
		<h3> {{ $post->post_name }}</h3>
		<h5><small>{{ $post->post_date }}</small></h5>
		<img class="thumbnail" src="https://placehold.it/850x350">

		<p> {{ $post->post_content }} </p>
		<div class="callout">
			<ul class="menu simple">
				<li><a href="#">{{ $author->name }}</a></li>
				<li><a href="#">Comments: 3</a></li>
			</ul>
		</div>
	</div>

	<div class="container">
	    
        <form action="{{ route('comment',['post_name'=> $post->post_name]) }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control {{ $errors->has('comment_name') ? 'is-invalid' : '' }}" name="comment_name" id="comment_name" placeholder="Votre nom"
                                value="{{ old('comment_name') }}"> {!! $errors->first('comment_name', '
                <div class="invalid-feedback">:message</div>') !!}
            </div>
                <div class="form-group">
                    <input type="email" class="form-control {{ $errors->has('comment_email') ? 'is-invalid' : '' }}" name="comment_email" id="comment_email" placeholder="Votre email" value="{{ old('comment_email') }}"> {!! $errors->first('comment_email', '
                    <div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    <textarea class="form-control {{ $errors->has('comment_content') ? 'is-invalid' : '' }}" name="comment_content" id="comment_content" placeholder="Votre message">{{ old('comment_content') }}</textarea>                            {!! $errors->first('comment_content', '
                            <div class="invalid-feedback">:message</div>') !!}
                </div>
                <button type="submit" class="btn btn-secondary">Send !</button>
        </form>
	</div>
    <div class="col-md-8 col-md-offset-2">
         @foreach ( $comments as $comment )
            <div>
                <p><strong>Name: </strong> {{ $comment->comment_name }} </p>
                <p><strong>Comment: </strong> {{ $comment->comment_content }} </p>
            </div>    
        @endforeach

    </div> 


    @can('update', $post)
    <a href="/articles/{{ $post->post_name }}/edit">Update or delete this article</a>
    @endcan
<!-- AUN NO SIRVE 
    <div>
        <a href="'comment',['post_name'=> $post->post_name]">Edit or delete this article</a>
    </div>
-->

</div>

@endsection


