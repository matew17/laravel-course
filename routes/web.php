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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function(){
    return 'Hola mundo soy mateo';
});

Route::post('/hola-mundo', function(){
    return 'Hola mundo soy mateo por post';
});

Route::get('/contacto/{nombre}', function ($nombre) {
    return view('contacto', array(
        "nombre" => $nombre
    ));
});