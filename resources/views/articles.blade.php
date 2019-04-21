@extends('layouts.main')
@section('title', 'Artciles')

@section('content')
    @section('subtitle','Articles')
    @section('subheader','This is your personal page, you can only see your post')

<div class="row medium-8 large-7 columns">
   <h3 style="padding-left: 30px;"> Here are all the post you've written:  </h3>
	<div style="padding-left: 70px;">
		<hr>

		<ul style="padding-left: 100px">
			@foreach ( $posts as $post )
				<li> 
					<a href="/articles/{{ $post->post_name }}">{{ $post->post_title }} </a> 
				</li>
			@endforeach
		</ul>
		<hr>
		<div style="padding-right: 180px ">
	
		    <button class="button button1 is-link" style="float:right;">
		    <a href="/create">Create a new article</a>
		    </button>
	   
	    </div>
	</div>
</div>
	
	




@endsection 