<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    /**
     * Display a listing of the resource.
     *'roles:Admin'
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = \App\User::findOrFail(Auth::id());

        return view('admin.contentPerfil', compact('user'));
    }


    public function listar()
    {
        $users = \App\User::all();

        return view('admin.listAlumn', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

           'image' => 'required|image|max:2048'

       ]);

       if ($request->hasFile('image')) {

           $file = $request->file('image');

           $name = time() . $file->getClientOriginalName();

           $filePath = 'images/' . $name;

           Storage::disk('s3')->put($filePath, file_get_contents($file));

       }

       return back()->with('info','usuario actualizado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrFail($id); //App\User (modelo User. DEBE SER IMPORTADO) devuelve todos los usuarios de la bd  // findOrFail ->funcion de laravel para encontrar o fallar(lanzar excepcion)
        return view ('admin.edit',compact('user')); //compact envia la variable a la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id = Auth::id();


        $datos = \App\DatosUsuario::findOrFail($id);
        $datos->user_id = $id;
        $datos->update($request->all());
        
        return back()->with('info','usuario actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//controlador de perfil para mostrar
    public function perfil()
    {

        // $us = \App\User::join("datos_usuarios","users.id","=","datos_usuarios.datos_id")
        //     ->where('users.id','=',$id)
        //     ->get();

    }

    //controlador de perfil para mostrar
    public function verVideos()
    {

        return view('admin.verVideos');
    }
    //controlador de perfil para mostrar
    public function subVideo()
     {

        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';

        $images = [];

        $files = Storage::disk('s3')->files('images');

           foreach ($files as $file) {

               $images[] = [

                   'name' => str_replace('subVideo/', '', $file),

                   'src' => $url . $file

               ];

           }

       return view('admin.subVideo', compact('images'));



    }
}
