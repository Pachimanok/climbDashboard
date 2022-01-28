<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Image;


class profesorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cursos = curso::all();
    
        $profesores = DB::table('profesors')->orderBy('priority','ASC')->orderBy('id', 'ASC')->get();
        
        $nombreRuta = 'profesores';
        return view('admin.indexProfesores')->with('ruta',$nombreRuta)->with('cursos',$cursos)->with('profesores',$profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombreRuta = 'profesores';
        return view('admin.createProfesor')->with('ruta',$nombreRuta);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $archivo = $request->File('foto');
        
        if($archivo == null) {

            $name = $request['imagenActual'];

        }else{

            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
    
            $imagen = Image::make($archivo);
            $imagen->resize(300,300);
            $imagen->encode($extencion);
            $path = public_path('assets/img/profesores/' . $name);
            $imagen->save($path);
        }

        foreach($request->priority as $priority);
        $profesor = new profesor();
        $profesor->nombre = $request->nombre;
        $profesor->foto = $name;   
        $profesor->priority = $priority;   
        $profesor->linkedin = $request->linkedin;   
        $profesor->trabajos = $request->trabajos;   
        $profesor->estudios = $request->estudios;   
        $profesor->introduccion = $request->introduccion;
        $profesor->descripcion = $request->descripcion;
        $profesor->save();

        Session::flash('message','Se creó correctamente el profesor '. $request->nombre);
        return Redirect::to('profesorAdmin'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = profesor::find($id);
        
        $cursos = DB::table('cursos')->where('profesor_id','=',$id)->get();
        $qcursos = $cursos->count();
        $nombreRuta = 'profesores';


        return view('admin.verProfesor')->with('ruta',$nombreRuta)->with('profesor',$profesor)->with('cursos',$cursos)->with('qcursos',$qcursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = profesor::find($id);
        
        $cursos = DB::table('cursos')->where('profesor_id','=',$id)->get();
        $qcursos = $cursos->count();
        $nombreRuta = 'profesores';


        return view('admin.editProfesor')->with('ruta',$nombreRuta)->with('profesor',$profesor)->with('cursos',$cursos)->with('qcursos',$qcursos);
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

        $archivo = $request->File('foto');
        
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();

        $imagen = Image::make($archivo);
        $imagen->resize(300,300);
        $imagen->encode($extencion);
        $path = public_path('assets/img/profesores/' . $name);
        $imagen->save($path);
        

        foreach($request->priority as $priority);
        $profesor = profesor::find($id);
        $profesor->nombre = $request->nombre;
        $profesor->foto = $name;   
        $profesor->priority = $priority;   
        $profesor->linkedin = $request->linkedin;   
        $profesor->trabajos = $request->trabajos;   
        $profesor->estudios = $request->estudios;   
        $profesor->introduccion = $request->introduccion;
        $profesor->descripcion = $request->descripcion;
        $profesor->save();
        
        Session::flash('message','Se editó correctamente el profesor '. $request->nombre);
        return Redirect::to('profesorAdmin'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       
       $profesor = profesor::find($id);
       $nombre = $profesor->nombre;
       $profesor->delete();
    
       Session::flash('message','Se eliminó correctamente el profesor '. $nombre);
     return Redirect::to('profesorAdmin'); 
    }
    
}
