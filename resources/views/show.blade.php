@extends('layouts.main')
@section('title','article')

@section('content')
    @section('subtitle',$post->post_title)
    @section('subheader',$author->name )



<div class="row medium-8 large-7 columns">
	<div class="blog-post">
		<h3> {{ $post->post_name }}</h3>
        <h5><strong> By {{ $author->name }}</strong></h5>
		<h5><small>{{ $post->post_date }}</small></h5>
       

    <!-- Print image tag -->
        <?php 
        $images = array('1.jpg','3.jpg','4.jpg','5.jpg','6.jpg','8.jpg','9.jpg');
        $random_im = array_rand($images); ?>

        <img class="myimage" src="{!! asset('img/'.$images[$random_im]) !!}" />
        <hr style="color:red">
		<p > {{ $post->post_content }} </p>
         <div style="padding: 30">
    @can('update', $post)
   <button class="<button button1" style="float: right;"> <a href="/articles/{{ $post->post_name }}/edit">UPDATE OR DELETE THIS ARTICLE</a> </button>
    @endcan
    </div>
        <hr style="color:red">


		
    <div class="borderComments">
	<div class="container">
        <p>Leave a comments: </p>
	    
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
                <button type="submit" class="button is-link">Send !</button>
        </form>
	</div>
    </div>

    <div class="col-md-8 col-md-offset-2" style="padding: 30px;">
        <p> <strong>Latest comments: </strong>  </p>
         @foreach ( $comments as $comment )
            <div>
                <p><strong>Name: </strong> {{ $comment->comment_name }} </p>
                <div class="borderComments">
                <p><strong>Comment: </strong> {{ $comment->comment_content }} </p></div>
            </div>    
        @endforeach

    </div> 

   

</div>

@endsection


