@extends('layouts.main')
@section('title','create')

@section('content')
    @section('subtitle','Edit this article')
    @section('subheader','You can edit your own article only (unless your the admin)')


<div class="row medium-8 large-7 columns">
    <div style="padding: 50px" class="borderComments">
		<form method="POST" action="{{ route('editArticle',['post_name'=> $post->post_name]) }}" style="margin-bottom: 1em;">
			{{ method_field('PATCH') }} <!--route correctly to a patch method-->
			{{ csrf_field() }} <!--Always put this when using a form-->
			<div class="field">
					<label class="label" for="post_title">Title</label>
				<div class="control">
					<input type="text" class="input" name="post_title" placeholder="post_title" value=" {{$post->post_title}}" required>
				</div>
			</div>

			<div class="field">
					<label class="label" for="post_name">Article name</label>
				<div class="control">
					<input type="text" class="input" name="post_name" placeholder="post_name" value=" {{$post->post_name}}" required>
				</div>
			</div>

			<div class="field">
					<label class="label" for="post_author">Author Id</label>
				<div class="control">
					<input type="text" class="input" name="post_author" placeholder="post_author" value=" {{$post->post_author}}" required>
				</div>
			</div>

			<div class="field">
					<label class="label" for="post_content">Article content</label>
			

				<div class="control">
					<textarea name="post_content" class="textarea" required>{{$post->post_content}} </textarea>
				</div>
			</div>

			<div class="field">

				<div class="control">
					<button type="submit" class="button is-link" style="float: left;" >update button</button>
				</div>
			</div>
			</form>

			<form method="POST" action="{{ route('deleteArticle',['post_name'=> $post->post_name]) }}">
			<!--{{ method_field('DELETE') }}
			{{ csrf_field() }}-->

			@method('DELETE')
			@csrf
			<div class="field">
				<div class="control">
					<button type="submit" class="button" style="background-color: red" style="float: left;" >delete Project</button>
				</div>
			</div>
			</form>
	</div>
</div>

@endsection