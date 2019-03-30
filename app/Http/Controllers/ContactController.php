<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;

//use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = \App\Contact::all();

        return view('confirm', ['contacts'=>$contacts]);
    }

    public function create(){
    	return view('contact');
    }

    public function store(ContactRequest $request)
    { 
    	$contact = new \App\Contact();
    	$contact->contact_name = $request->input('contact_name');
    	$contact->contact_email = $request->input('contact_email');
    	$contact->contact_message= $request->input('contact_message');
    	$contact->save();

        $contacts = \App\Contact::all();

    	return view('confirm', ['contacts'=>$contacts]);
    }
}
