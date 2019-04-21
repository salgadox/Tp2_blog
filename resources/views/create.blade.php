@extends('layouts.main')
@section('title','create')

@section('content')
    @section('subtitle','Write a new article')
    @section('subheader','You can write an article and it will appeare in your page ')

    <div class="row medium-8 large-7 columns">
    	<div class="container borderComments">
    <form  action="{{ route('createArticle') }}" method="POST" >
		{{ csrf_field() }}
		<div class="control">
			<label class="label" for="post_title" >
				Article title
			</label>
			<input type="text" class="input {{ $errors->has('post_title')? 'is-danger' : '' }}" name="post_title" value="{{ old('post_title') }}"  >
		</div>

		<div class="control">
			<label class="label" for="post_name" >
				post name
			</label>
			<input type="text" class="input {{ $errors->has('post_name')? 'is-danger' : '' }}" name="post_name" value="{{ old('post_name') }}"  >
		</div>
		
		<div class="field">
			<label class="label" for="post_content" >
				Article content
			</label>
			<div class="control">
				<textarea name="post_content" class="textarea {{ $errors->has('post_content')? 'is-danger' : '' }}"  > {{ old('post_content') }} </textarea>  
			</div>
			
		</div>
		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Send Article </button>
			</div>
		</div> 

		@if ($errors->any())
			<div class="notification is-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif	
	</form>
</div>
</div>

@endsection