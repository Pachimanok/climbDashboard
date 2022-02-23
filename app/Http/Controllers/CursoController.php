<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;

class CursoController extends Controller
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
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(curso $curso)
    {
        $curso = curso::find($curso->id);
        $profesor = profesor::find($curso->profesor_id);
        $nombreRuta = 'cursos';
        return view('curso')->with('curso',$curso)->with('ruta',$nombreRuta)->with('profesor',$profesor->nombre);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(curso $curso)
    {
        //
    }
}
