<?php

namespace App\Http\Controllers;

use DB;

use App\Message;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMessageRequest;

class MessagesController extends Controller
{   

    function __construct()
    {
        $this->middleware('auth')->except('create','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$messages = DB::table('messages')->get(); //extraer datos desde la bd con querybuilder

        $messages = Message::all();

        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMessageRequest $request)
    {
        // guardar datos con querybuilder
        // DB::table('messages')->insert([
        //     "nombre" =>$request ->input('nombre'),
        //     "email" =>$request ->input('email'), 
        //     "mensaje" =>$request ->input('mensaje'),
        //     "created_at"=>Carbon::now(),
        //     "updated_at"=>Carbon::now()
        // ]);

        Message::create($request->all());

        return redirect()->route('mensajes.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //$message = DB::table('messages')->where('id',$id)->first(); //encontrar un dato en la base de datos con querybuilder

        $message = Message::findOrFail($id);

        return view('messages.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.edit',compact('message'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $message = Message::findOrFail($id);
        
        $message ->update($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('messages')->where('id',$id)->delete(); //querybuilder

        Message::findOrFail($id)->delete();
        
        return redirect()->route('mensajes.index');
    }
}
