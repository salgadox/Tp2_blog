@extends('layouts.main')
@section('title')

@section('content')
    @section('subtitle','Welcome')
    @section('subheader','blog')



<div>
	<ul>
		@foreach ( $posts as $post )
			<li> 
				<a href="/articles/{{ $post->post_name }}">{{ $post->post_title }} </a> 
			</li>
		@endforeach
	</ul>
</div>

@endsection
