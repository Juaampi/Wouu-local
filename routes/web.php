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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/conversacion','personController@conversacion');
Route::get('/busqueda','specialistController@busqueda');
Route::get('/cancelateImg','specialistController@cancelateImg');
Route::get('/deleteContrato','contratoController@deleteContrato');
Route::get('/deleteSpecialist','specialistController@deleteSpecialist');
Route::get('/deleteUser','personController@deleteUser');
Route::get('/adminPanel','personController@adminPanel');
Route::get('/recupero','personController@recupero');
Route::get('/recuperarClave','personController@recuperarClave');
Route::get('/contrato','contratoController@contrato');
Route::get('/postRegister','personController@postRegister');
Route::get('/puntuarContrato','contratoController@puntuarContrato');
Route::get('/finalizarContrato','contratoController@finalizarContrato');
Route::get('/aceptarContrato','contratoController@aceptarContrato');
Route::get('/preContrato','contratoController@preContrato');
Route::post('/enviarPreContrato','contratoController@enviarPreContrato');
Route::post('/index','Controller@index');
Route::post('/savePreProblem','problemController@savePreProblem');
Route::post('/preProblem','problemController@preProblem');
Route::get('/activateImg','personController@activateImg');
Route::post('/changeImage','personController@changeImage');
Route::get('/activate','specialistController@activate');
Route::get('/adminPanel','PaginasController@adminPanel');
Route::get('/perfilSpecialist','specialistController@perfilSpecialist');
Route::get('/savePasswordSpecialist','specialistController@savePasswordSpecialist');
Route::get('/savePassword','personController@savePassword');
Route::get('/deleteParticipation','problemController@deleteParticipation');
Route::get('/delete','problemController@delete');
Route::get('/updatePoints','statusController@updatePoints');
Route::get('/endContrato','statusController@endContrato');
Route::get('/acceptContrato','statusController@acceptContrato');
Route::get('/sendContrato','statusController@sendContrato');
Route::get('/sendChatUser','chatController@sendChatUser');
Route::post('/chatUser','chatController@chatUser');
Route::get('/userMsj','chatController@userMsj');
Route::get('/sendChatSpecialist','chatController@sendChatSpecialist');
Route::post('/chatSpecialist','chatController@chatSpecialist');
Route::get('/specialistMsj','specialistController@specialistMsj');
Route::get('/activeProblem','activeProblemController@activeProblem');
Route::post('/problem','problemController@problem');
Route::get('/problemas','problemController@problemas');
Route::get('/userPanel','personController@userpanel');
Route::get('/allspecialist','PaginasController@allspecialist');
Route::post('/saveProblem','problemController@saveProblem');
Route::get('/editUser','personController@editUser');
Route::get('/editSpecialist','specialistController@editSpecialist');
Route::get('/specialistPanel','specialistController@specialistPanel');
Route::get('/loguearse','PaginasController@loguearse');
Route::get('/logins','Controller@logins');
Route::get('/registro','personController@view');
Route::get('/','PaginasController@funcion1');
Route::get('/index','PaginasController@index');
Route::get('/cargar','PaginasController@cargar');
Route::get('/logout','PaginasController@logout');
Route::POST('/registrar','personController@registrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
