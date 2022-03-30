<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SistemController;

Route::get('/', function () {
    return view('index');
});

//----------------- Index ----------------------------------

Route::name('index')->get('/index',[SistemController::class,'index']);

// -------------------------Papeleria -----------------------

Route::name('cero')->get('/cero',[SistemController::class,'cero']);
Route::name('ad')->get('/ad',[SistemController::class,'ad']);
Route::name('admi')->get('/admi',[SistemController::class,'admi']);
Route::name('cono')->get('/cono',[SistemController::class,'cono']);
Route::name('juren')->get('/juren',[SistemController::class,'juren']);
Route::name('ta_usu')->get('/ta_usu',[SistemController::class,'ta_usu']);
Route::name('térmi')->get('/térmi',[SistemController::class,'térmi']);


//-------------login Usuario-------------------------
Route::name('login')->get('/login',[LoginController::class,'login']);
Route::name('validar')->post('/validar',[LoginController::class,'validar']);  
Route::name('logout')->get('/logout',[LoginController::class,'logout']);  
//Route::name('validar')->post('validar/', 'LoginController@validar');    //  
//Route::name('logout')->get('logout/', 'LoginController@logout');

//-------------login Administracion-------------------------

Route::name('loginad')->get('/loginad',[LoginController::class,'loginad']);  
Route::name('validarad')->post('/validarad',[LoginController::class,'validarad']);  
Route::name('logoutad')->get('/logoutad',[LoginController::class,'logoutad']);  
/**Route::name('loginad')->get('loginad/', 'LoginController@loginad');    //   
Route::name('validarad')->post('validarad/', 'LoginController@validarad');    //  
Route::name('logoutad')->get('logoutad/', 'LoginController@logoutad');**/



//------------------------------------nuevo-------------------------------------------------

/**Route::name('nuevo')->get('nuevo/', 'LoginController@nuevo');
Route::name('guardar')->post('guardar/', 'LoginController@guardar');**/
Route::name('nuevo')->get('/nuevo',[LoginController::class,'nuevo']);  
Route::name('guardar')->post('/guardar',[LoginController::class,'guardar']);  

//------------------------------------ agregar / usuario / admi -------------------------------------------------
/**Route::name('agregar')->get('agregar/', 'LoginController@agregar');
Route::name('guardar2')->post('guardar2/', 'LoginController@guardar2');**/
Route::name('agregar')->get('/agregar',[LoginController::class,'agregar']);  
Route::name('guardar2')->post('/guardar2',[LoginController::class,'guardar2']);  

//------------------------------------ agregar / usuaradministrador / admi -------------------------------------------------
/**Route::name('agregar2')->get('agregar2/', 'LoginController@agregar2');
Route::name('guardar3')->post('guardar3/', 'LoginController@guardar3');**/
Route::name('agregar2')->get('/agregar2',[LoginController::class,'agregar2']);  
Route::name('guardar3')->post('/guardar3',[LoginController::class,'guardar3']);  
Route::get('/user/create','LoginController@create');
Route::post('/user','LoginController@store');

//------------------------------------ agregar / usuaradministrador / admi -------------------------------------------------
/**Route::name('agregar3')->get('agregar3/', 'LoginController@agregar3');
Route::name('guardar4')->post('guardar4/', 'LoginController@guardar4');**/

Route::name('agregar3')->get('/agregar3',[LoginController::class,'agregar3']);  
Route::name('guardar4')->get('/guardar4',[LoginController::class,'guardar4']);  

//------------- Administracion / Usuarios -------------------------
/**Route::name('mostrar')->get('mostrar/', 'LoginController@mostrar');
Route::name('editar')->get('editar/{id}', 'LoginController@editar');  
Route::name('salvar')->put('salvar/{id}', 'LoginController@salvar'); **/

Route::name('mostrar')->get('/mostrar',[LoginController::class,'mostrar']);  
Route::name('editar')->get('/editar/{id}',[LoginController::class,'editar']); 
Route::name('salvar')->get('/salvar/{id}',[LoginController::class,'salvar']);   

//------------- Administracion / Admi -------------------------
/**Route::name('mostrar2')->get('mostrar2/', 'LoginController@mostrar2');
Route::name('editar2')->get('editar2/{id}', 'LoginController@editar2');  
Route::name('salvar2')->put('salvar2/{id}', 'LoginController@salvar2'); **/

Route::name('mostrar2')->get('/mostrar2',[LoginController::class,'mostrar2']);  
Route::name('editar2')->get('/editar2/{id}',[LoginController::class,'editar2']); 
Route::name('salvar2')->put('/salvar2/{id}',[LoginController::class,'salvar2']);

//------------- Administracion / juguete -------------------------
/**Route::name('mostrar3')->get('mostrar3/', 'LoginController@mostrar3');
Route::name('editar3')->get('editar3/{id}', 'LoginController@editar3');  
Route::name('salvar3')->put('salvar3/{id}', 'LoginController@salvar3');**/

Route::name('mostrar3')->get('/mostrar3',[LoginController::class,'mostrar3']);  
Route::name('editar3')->get('/editar3/{id}',[LoginController::class,'editar3']); 
Route::name('salvar3')->put('/salvar3/{id}',[LoginController::class,'salvar3']);

//---------------------------Borrar-------------------------------------
/***Route::name('borrar')->delete('borrar/{id}', 'LoginController@borrar');    // para formulario utlisamos el metodo
Route::name('borrar2')->delete('borrar2/{id}', 'LoginController@borrar2');
Route::name('borrar3')->delete('borrar3/{id}', 'LoginController@borrar3');**/

Route::name('borrar')->delete('/borrar/{id}',[LoginController::class,'borrar']);  
Route::name('borrar2')->delete('/borrar2/{id}',[LoginController::class,'borrar2']); 
Route::name('borrar3')->delete('/borrar3/{id}',[LoginController::class,'borrar3']);

//---------------------------Detalle-------------------------------------
/**Route::name('detalle')->get('detalle/{id}', 'LoginController@detalle');
Route::name('nombre')->get('nombre/{id}', 'LoginController@nombre');**/

Route::name('detalle')->get('/detalle',[LoginController::class,'detalle']); 
Route::name('nombre')->get('/nombre',[LoginController::class,'nombre']);

  