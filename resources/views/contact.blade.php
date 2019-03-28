@extends('layouts.main')
@section('title','contact')

@section('content')
    @section('subtitle','Contact us')
    @section('subheader','blog')

<div class="row medium-8 large-7 columns">
    <div class="container">
	    
        <form action="{{ url('/contact') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom"
                                value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
                <div class="invalid-feedback">:message</div>') !!}
            </div>
                <div class="form-group">
                    <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email" value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
                    <div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
                            <div class="invalid-feedback">:message</div>') !!}
                </div>
                <button type="submit" class="btn btn-secondary">Send !</button>
        </form>
	</div>
</div>

@endsection

