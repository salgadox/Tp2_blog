@extends('layouts.main')
@section('title', 'Artciles')

@section('content')
    @section('subtitle','Article')
    @section('subheader','blog!')


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