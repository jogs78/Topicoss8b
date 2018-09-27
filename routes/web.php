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

Route::get('/nombre', function () {
    return "Soy Jorge";
});


Route::get('/nombre/{apellido}', function ( $apellido) {
    return "Soy Jorge $apellido";
});

Route::get('/somos', function () {
    return view('somos');
});


Route::get('/quienessomos',  'PrimerControlador@PrimerAccion' );
Route::get('/contacto',  'PrimerControlador@SegundaAccion' );

