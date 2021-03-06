<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('Theme/SolicitarCotizacionCli');
});

/*Route::get('solicitar',function(){
	$clientes =Cliente::all();
	$cliente["linda"]=Cliente::find(1);
	return View::make('theme/SolicitarCotizacionCli',$cliente);
});

*/


Route::get('/test',array('before'=>'auth.basic',function(){

	return "holamundo";

}));





Route::get("login",function(){
	return View::make('Theme/login');
});


Route::get("prueba/otro",function(){
	return Cliente::all();
});

Route::get("solicitar",function()
{
	return  View::make('Theme/SolicitarCotizacionCli');
    
});

Route::get("home",function()
{
	return  View::make('Theme/HomeCliente');
    
});





Route::get("estado",function()
{
	return  View::make('Theme/EstadoServicioCli');
    
});



Route::get("reclamo",function()
{
	return  View::make('Theme/ReclamoCli');
    
});

Route::get("principal",function()
{
	return  View::make('Theme2/index');
    
});


Route::post("postLogin","AuthController@postLogin");

Route::post("createUser","AuthController@createUser");

Route::get("Exit","AuthController@logOut");

Route::get("cotizacion",array("after"=>"guest",function()
{
	return  View::make('Theme/CotizacionesPasadasCli');
    
}));