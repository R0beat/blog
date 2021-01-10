<?php

//El método view es para paginas con poca o nula información 
Route::view('/','home',['nombre' => 'Roberto'])->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::post('contact','MessageController@store')->name('message.store');
// 1- Recibe el nombre del recurso y el nombre del controlador
// 2- Encadenamos el metodo names para darle nombre a este recurso
// 3- como parametro debe ser igual al del controlador
// pasamos un array con la varible portfolio y la renombramos proyect

Route::resource('portfolio','ProjectController')
    ->parameters(['portfolio'=>'project'])
    ->names('projects');
   // ->middleware('auth'); Si queremos proteger todas las rutas 
 /*
Route::get('/project/crear','ProjectController@create')->name('projects.create');
Route::get('/project/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/project/{project}','ProjectController@update')->name('projects.update');
Route::delete('/project/{project}','ProjectController@destroy')->name('projects.destroy'); incluir el metedo en el formulio con la accion POST
Route::get('/project','ProjectController@index')->name('projects.index');
Route::post('/project','ProjectController@store')->name('projects.store');
Route::get('/project/{project}','ProjectController@show')->name('projects.show');

 */

Auth::routes(['register' => false]);

