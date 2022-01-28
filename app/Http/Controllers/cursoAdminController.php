<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class cursoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombreRuta = 'cursos';
       
        $cursos = DB::table('cursos')->orderBy('priority','ASC')->orderBy('id', 'ASC')->get();
        return view('admin.indexCurso')->with('ruta',$nombreRuta)->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = profesor::all();
        
        $nombreRuta = 'cursos';
        return view('admin.createCurso')->with('ruta',$nombreRuta)->with('profesores',$profesores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $archivo = $request->File('imagen');
            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
            $imagen = Image::make($archivo);
            $imagen->resize(300,200); /* ancho,largo */
            $imagen->encode($extencion);
            $path = public_path('assets/img/cursos/' . $name);
            $imagen->save($path);
            
            $file = $request->file('programa');
            $titulo = $request->titulo;
            $slug = Str::slug($titulo, '-');
            $nombre =  'Climb.Programa - '.$slug.'.pdf';
            $ruta = public_path('programas/'.$nombre);
            
            copy($file, $ruta);
            $descuento = $request->descuento * 0.01;
           
            
       
        foreach($request->priority as $priority);
        foreach($request->aplica_descuento as $aplica_descuento);
        foreach($request->activo as $activo);
        foreach($request->tipo as $tipo);

        foreach($request->profesor_id as $profesor_id);

        $curso = new curso();
        $curso->titulo = $request->titulo;
        $curso->tipo = $tipo;
        $curso->imagen = $name;
        $curso->descripcion_corta = $request->introduccion;
        $curso->q_clases = $request->q_clases;
        $curso->horario = $request->horario;
        $curso->inicioCursado = $request->inicioCursado;
        $curso->priority = $priority;
        $curso->descripcion = $request->descripcion ;
        $curso->link_programa = $nombre;
        $curso->precio = $request->precio;
        $curso->descuento = $descuento;
        $curso->aplica_descuento = $aplica_descuento;
        $curso->activo = $activo;
        $curso->profesor_id = $profesor_id;
        $curso->save();

        Session::flash('message','Se creó correctamente el curso '. $request->titulo);
        return Redirect::to('cursosAdmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = curso::find($id);
        $profesor= profesor::find($curso->profesor_id);
        $nombreRuta = 'cursos';
        return view('admin.verCurso')->with('ruta',$nombreRuta)->with('profesor',$profesor)->with('curso',$curso);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = curso::find($id);
        $profesores = profesor::all();
        $profesor = profesor::find($curso->profesor_id);

        $nombreRuta = 'cursos';
        return view('admin.editCurso')->with('ruta',$nombreRuta)->with('profesores',$profesores)->with('profesor',$profesor)->with('curso',$curso);
        
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
        
        foreach($request->priority as $priority);
        foreach($request->aplica_descuento as $aplica_descuento);
       /*  foreach($request->activo as $activo); */
        foreach($request->tipo as $tipo);
        foreach($request->profesor_id as $profesor_id);
        $descuento = $request->descuento * 0.01;

        $curso = curso::find($id);

        $curso->titulo = $request->titulo;
        $curso->tipo = $tipo;
        if($request->File('imagen') != null){
            $archivo = $request->File('imagen');
            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
            $imagen = Image::make($archivo);
            $imagen->resize(600,400); /* ancho,largo */
            $imagen->encode($extencion);
            $path = public_path('assets/img/cursos/' . $name);
            $imagen->save($path);
            $curso->imagen = $name;
        }
        $curso->descripcion_corta = $request->introduccion;
        $curso->q_clases = $request->q_clases;
        $curso->horario = $request->horario;
        $curso->inicioCursado = $request->inicioCursado;
        $curso->priority = $priority;
        $curso->descripcion = $request->descripcion ;
        if($request->File('programa') != null){
            $file = $request->file('programa');
            $titulo = $request->titulo;
            $slug = Str::slug($titulo, '-');
            $nombre =  'Climb.Programa - '.$slug.'.pdf';
            $ruta = public_path('programas/'.$nombre);
            
            copy($file, $ruta);
            $curso->link_programa = $nombre;
           
        }   
        $curso->precio = $request->precio;
        $curso->descuento = $descuento;
        $curso->aplica_descuento = $aplica_descuento;
       /*  $curso->activo = $activo; */
        $curso->profesor_id = $profesor_id;
        $curso->save();

        Session::flash('message','Se actualizó correctamente el curso '. $request->titulo);
        return Redirect::to('cursosAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = curso::find($id);
       $nombre = $curso->titulo;
       $curso->delete();
    
       Session::flash('message','Se eliminó correctamente el curos '. $nombre);
        return Redirect::to('cursosAdmin'); 
    }
}
