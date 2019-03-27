@extends('layouts.main')
@section('title','article')

@section('content')
    @section('subtitle',$post->post_title)
    @section('subheader',$post->post_author)



<div class="row medium-8 large-7 columns">
<div class="blog-post">
<h3> {{ $post->post_name }}</h3>
<h5><small>     {{ $post->post_date }}      </small></h5>
<img class="thumbnail" src="https://placehold.it/850x350">

<p>{{ $post->post_content }}</p>
<div class="callout">
<ul class="menu simple">
<li><a href="#">{{ $post->post_author }}</a></li>
<li><a href="#">Comments: 3</a></li>
</ul>
</div>
</div>

@endsection


