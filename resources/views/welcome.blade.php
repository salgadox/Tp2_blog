@extends('layouts.main')
@section('title')

@section('content')
    @section('subtitle','Welcome ')
    @section('subheader','This is the main page')

<div class="row medium-8 large-7 columns">
<h3 style="padding-left: 30px;"> Latest 3 articles : </h3>
<div style="padding-left: 70px;">
	<hr>
	<ol style="padding-left: 100px">
		@foreach ( $posts as $post )
			<li> 
				<a href="/articles/{{ $post->post_name }}">{{ $post->post_title }} </a> 
			</li>
		@endforeach
	</ol>
	<hr>
	<div style="padding-right: 180px ">
		@can('create', $post)
		    <button class="button button1" style="float:right;">
		    <a href="/create">Create a new article</a>
		    </button>
	    @endcan
	    </div>
</div>
</div>

@endsection
