<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    //public function store(Request $request){ Utilizamos el metodo request y lo guardamos en una variable
	public function store(){
    	return request();//Funcion request de la instancia Illuminate
	}
}
