<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    //public function store(Request $request){ Utilizamos el metodo request y lo guardamos en una variable
	public function store(){
    	//return request();//Funcion request de la instancia Illuminate
    	request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',//['required','email']
    		'subject' => 'required',
    		'content' => 'required',
    	]);
	}
}
