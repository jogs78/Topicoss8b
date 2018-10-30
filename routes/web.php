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
//    $a = array('Excelente' => 10 , 'Muy Bien' => 9, 'Bien' => 8, 'Suficiente +' => 7, 'Suficiente' => 6, 'In suficiente' => 5, 'No aceptable' => 4,  'No aceptable -' => 3 );
//    $a = array('Si presenta' => 10 , 'No presenta' => 0 );
//    $a = array('Convincente' => 10 , 'Medianamente' => 5, 'Discutible' => 0 );
//    $a = array('Licenciatura' => 10 , 'Posgrado' => 0 );
//		echo json_encode($a);  
});


Route::get('/nombre/{apellido}', function ( $apellido) {
    return "Soy Jorge $apellido";
});

Route::get('/somos', function () {
    return view('somos');
});

Route::get('quienessomos',   'PrimerControlador@PrimerAccion' );
Route::get('contacto'    ,   'PrimerControlador@SegundaAccion' );
Route::get('mensaje'     ,   'PrimerControlador@TercerAccion' );
Route::get('parametro/{uno}','PrimerControlador@CuartaAccion' );
Route::get('ejemplo5',       'PrimerControlador@QuintaAccion' );
Route::get('ejemplo6',       'PrimerControlador@SextaAccion' );
Route::get('formulario',     'PrimerControlador@Accion7' );
Route::post('enviado',    'PrimerControlador@Accion8' );

Route::get('usuarios','PrimerControlador@Accion9');

Route::get('carros','CarrosControlador@listar');

Route::get('carros/agregar' , 'CarrosControlador@agregar');
Route::post('carros/add' , 'CarrosControlador@add' );

Route::get('carros/actualizar/{id}','CarrosControlador@actualizar');
Route::post('carros/update/{id}','CarrosControlador@update');

Route::get('carros/borrar/{id}','CarrosControlador@borrar');
Route::post('carros/delete/{id}','CarrosControlador@delete');


Route::get('error',function () {
    return view('error');
});

//CRUD
Route::get('usuarios','UsuariosControlador@listar');

Route::get('usuarios/agregar' , 'UsuariosControlador@agregar');
Route::post('usuarios/add' , 'UsuariosControlador@add' );
Route::post('usuarios/add2' , 'UsuariosControlador@add2' );

Route::get('usuarios/actualizar/{id}','UsuariosControlador@actualizar');
Route::post('usuarios/update/{id}','UsuariosControlador@update');
Route::post('usuarios/updatename','UsuariosControlador@updatename');
Route::post('usuarios/deleterow','UsuariosControlador@deleterow');



Route::get('usuarios/borrar/{id}','UsuariosControlador@borrar');
Route::post('usuarios/delete/{id}','UsuariosControlador@delete');

Route::get('dinamica','PrimerControlador@Accion10' );

