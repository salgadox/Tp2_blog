@extends('layouts.main')
@section('title','contacts')

@section('content')
    @section('subtitle','All the contact msn')
    @section('subheader','You can see all the contact messages sent, nice. ')

    <div style="padding:105px" >
        <h2>Messages: </h2>
	<ul>
		@foreach ( $contacts as $contact )
			<div style="padding: 15px">
                <p><strong>Name: </strong> {{ $contact->contact_name }} </p>
                <div class="borderComments">
                <p><strong>Message: </strong> {{ $contact->contact_message }} </p></div>
            </div> 
		@endforeach
	</ul>
</div>

@endsection