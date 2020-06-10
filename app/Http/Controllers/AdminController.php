<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'roles:Admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboardAdmin');
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
        //
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
    public function update(Request $request, $id)
    {
        $user = \App\User::findOrFail($id);

        $user->update($request->all());
        
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

        return view('admin.contentPerfil');
    }
}
