<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;

use Illuminate\Support\Facades\Redirect;
class IndexController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function autentica(Request $request){
    	$login = DB::table('login')->where('email', '=', $_POST['user'])->where('password', '=',)->first();
    	if($login != null){
    		$noivos = DB::table("noivos")->where('idNoivos','=',$login->idNoivos)->first();
    		//salvar sessoes
    		Session::put('id', $login->idLogin);
    		Session::put('nome', $login->nome);
    		Session::put('noivos', $noivos->idNoivos);
    		Session::put('perfil', $login->idPerfil);
    		Session::put('email', $login->email);
    		Session::put('nome_noiva', $noivos->nomeNoiva);
    		Session::put('nome_noivo', $noivos->nomeNoivo);
    		Session::put('validadePlano', $noivos->validadePlano);
    		Session::put('facebookPagina', $noivos->facebookPagina);
    		Session::put('hashtag', $noivos->hashtag);
    		
    		
    		return Redirect::to('home');
    		
    		
    	}else{
    		return view('index');
    	}
    	 
    	 
    }

    public function autentica_admin(Request $request){
        $user = [
            'email' => $_POST['user'],
            'password' => md5($_POST['senha'])
        ];
         
        if (Auth::attempt($user))
        {
            // user is now logged in!
            // Access user object with Auth::user()
        }
    }

     public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password, 'administrador' => 1]))
        {
            // The user is active, not suspended, and exists.
        }
    }

   
}
