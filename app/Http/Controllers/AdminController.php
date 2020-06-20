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
        //$user = \App\User::findOrFail($id); //App\User (modelo User. DEBE SER IMPORTADO) devuelve todos los usuarios de la bd  // findOrFail ->funcion de laravel para encontrar o fallar(lanzar excepcion)
        

        $user = \App\user::findOrFail($id);

        //return back()->with('info','usuario actualizado');

        return view ('admin.edit',compact('user')); //compact envia la variable a la vista





    }



    public function updateUser(Request $request)
    {
        $header = $request->header();
        $referer = $header['referer'];
        $id = substr($referer[0],27);//cambiar numero al momento de subir, ya que este esta determinado por la extension de la url
        $datos = \App\DatosUsuario::findOrFail($id);
        $datos->user_id = $id;
        $datos->update($request->all());
        
        return view('admin.listAlumn')->with('info','usuario actualizado');
     
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

        \App\User::findOrFail($id)->delete();
        return view('admin.listAlumn')>with('info','usuario eliminado');
    }

//controlador de perfil para mostrar
    public function perfil()
    {

        // $us = \App\User::join("datos_usuarios","users.id","=","datos_usuarios.datos_id")
        //     ->where('users.id','=',$id)
        //     ->get();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('file')) {


            $file = $request->file('file');



            $name = time() . $file->getClientOriginalName();

            $filePath = 'Videos/' . $name;

            Storage::disk('s3')->put($filePath, file_get_contents($file));


            //request()->file('file')->store( 'Videos', 's3');


            return back()->with('info','listo');
        }

        else {
        
            return 'No se ha subido ningun archivo';
        }
    
        

    }

    //controlador de perfil para mostrar
    public function verVideos()
    {


        $url = 'https://pazyoga.s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com' . '/';

        $videos= [];

        $files = Storage::disk('s3')->files('Videos');

           foreach ($files as $file) {

               $videos[] = [

                   'name' => str_replace('Videos/', '', $file),

                   'src' => $url . $file

               ];

           }


        return view('admin.verVideos',compact('videos','files'));
    }
    //controlador de perfil para mostrar
    public function subVideo()
     {

       return view('admin.subVideo');



    }
}
