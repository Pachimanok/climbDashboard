<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(profesor $profesor)
    {
        $qprofe = profesor::find($profesor);
        $profe = $qprofe[0];
        $cursos = DB::table('cursos')->where('profesor_id','=',$profe->id)->get();
        $qcursos = $cursos->count();
        
        

        $nombreRuta = 'profesor';
        return view('profesor')->with('ruta',$nombreRuta)->with('profesor',$profe)->with('cursos',$cursos)->with('qcursos',$qcursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(profesor $profesor)
    {
        //
    }
}
