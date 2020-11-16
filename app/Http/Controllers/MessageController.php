<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //public function store(Request $request){ Utilizamos el metodo request y lo guardamos en una variable
	public function store(){
    	//return request();//Funcion request de la instancia Illuminate
    	$messge =request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',//['required','email']
    		'subject' => 'required',
    		'content' => 'required',
    	]);
        Mail::to('roberto.gonzalez.a739@gmail.com')->queue(new MessageReceived($messge));

        return back()->with('status',__('Message received, We will respond to you in less than 24 hours'));
	}
}
