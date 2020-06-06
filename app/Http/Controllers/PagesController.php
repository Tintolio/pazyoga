<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
  /* inyectar método request para utilizarlo en la función mensaje  
	protected $request;

	public function __construct(Request $request){

		$this ->request =$request;
	}

*/
/*
	public function __construct(){

		$this->middleware('Example',['only' -> ['home']]);

	}
*/
    public function home(){

    	return view('home');
    }


}
