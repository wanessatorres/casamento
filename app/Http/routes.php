<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//rotas do admin

Route::get("admin", function(){
	return view("admin/index");
});

Route::get("admin/home", function(){
	return view("admin/home");
});

Route::post('autentica_admin','IndexController@autentica_admin');
//rotas do sistema noivas

Route::get('/sistema', function () {
    return view('index');
});
Route::post('autentica','IndexController@autentica');

Route::get('home', function () {
	$menusPrincipais = $users = DB::table('acessos')
	->join('menuPrincipal', 'menuPrincipal.idMenuPrincipal', '=', 'acessos.idMenuPrincipal')
	->select('menuPrincipal.*')
	->where('acessos.idPerfil','=',Session::get("perfil"))
	->get();
	
	return view('home', ['menu' => $menusPrincipais]);
});
Route::post('/auth/login', [
    'as' => 'auth', 'uses' => 'IndexController@authenticate'
]);