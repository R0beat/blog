<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('contacto',function(){
	return "Hola desde la pagina de contacto";
});

Pasando Parametros 'Obligatorios'
Route::get('saludo/{nombre}',function($nombre){
	return "Saludos ".$nombre;
});

Parametros por Default
Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
	return "Saludos ".$nombre;
});

//Named Routes si la persona cambia el nombre de la vista, el nombre de la ruta se queda fijo
Route::get('contactame',function(){
	return "Sección de contacto";
})->name('contacto');
Route::get('/', function () {
    //return view('welcome');
    echo "<a href='".route('contacto')."'>Contactos 1</a>";
    echo "<a href='".route('contacto')."'>Contactos 2</a>";
    echo "<a href='".route('contacto')."'>Contactos 3</a>";
    echo "<a href='".route('contacto')."'>Contactos 4</a>";
    echo "<a href='".route('contacto')."'>Contactos 5</a>";
});

//Formas de Pasar variables 
Route::get('home', function () {
	$nombre = "Roberto";
	//1-método with -> pasamos el nombre de la variable y el valor de la variable
    //return view('home')->with('nombre',$nombre);
    //2-array 
    //return view('home')->with(['nombre' => $nombre]);
    //3-como segundo parametro de la funcion
    //return view('home',['nombre' => $nombre]);
    //4-con el método compact
    return view('home',compact('nombre'));
})->name('home');

//Método por default
Route::get('/', function () {
    return view('welcome');
})->name('/');

*/

//El método view es para paginas con poca o nula información 
Route::view('/','home',['nombre' => 'Roberto'])->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::get('/portfolio','PortfolioController')->name('portfolio');



