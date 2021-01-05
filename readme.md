## Comando Utulizados

php artisan make:controller PhotoController --resource
php artsian migrate:fresh
php artisan migrate
php artisan r:l //route:list
php artisan r:l --name='name-route'

#Para crear rutas
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run dev

## Ejemplos de Rutas


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


//->only(['index','show']); Muestra solo los metodos mencionadas
//->except(['index','show']); Muestra todoso meno los metodos mencionadas
//Route::resource('proyectos','PortfolioController');
