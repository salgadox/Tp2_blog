@extends('layouts.main')
@section('title')

@section('content')
    @section('subtitle','Welcome')
    @section('subheader','blog')



<ul>
	@foreach ( $posts as $post )
		<li> {{ $post->post_title }} </li>
	@endforeach
</ul>

@endsection