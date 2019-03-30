@extends('layouts.main')
@section('title','contacts')

@section('content')
    @section('subtitle','Confirm')
    @section('subheader','blog!')

    <div>
	<ul>
		@foreach ( $contacts as $contact )
			<div>
                <p><strong>Name: </strong> {{ $contact->contact_name }} </p>
                <p><strong>Message: </strong> {{ $contact->contact_message }} </p>
            </div> 
		@endforeach
	</ul>
</div>

@endsection