@extends('layouts.main')
@section('title','create')

@section('content')
    @section('subtitle','Write a new article')
    @section('subheader','write an article')

    <form  action="{{ route('createArticle') }}" method="POST" >
		{{ csrf_field() }}
		<div class="control">
			<label class="label" for="post_title" >
				Article title
			</label>
			<input type="text" class="input {{ $errors->has('post_title')? 'is-danger' : '' }}" name="post_title" value="{{ old('post_title') }}"  >
		</div>

		<div class="control">
			<label class="label" for="post_author" >
				Author id
			</label>
			<input type="text" class="input {{ $errors->has('post_author')? 'is-danger' : '' }}" name="post_author" value="{{ old('post_author') }}"  >
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
				<button type="submit" class="butoon is-link">Send Article </button>
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

@endsection