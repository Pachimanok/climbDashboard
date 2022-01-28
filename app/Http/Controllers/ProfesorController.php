<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfesorController extends Controller
{
    public function show(profesor $profesor)
    {
        $profe = profesor::find($profesor->id);

        $cursos = DB::table('cursos')->where('profesor_id','=',$profe->id)->get();
        $qcursos = $cursos->count();

        $nombreRuta = 'profesor';
        return view('profesor')->with('ruta',$nombreRuta)->with('profesor',$profe)->with('cursos',$cursos)->with('qcursos',$qcursos); 
    }

    public function update(Request $request, profesor $profesor)
    {
        //
    }

    public function destroy(profesor $profesor)
    {
        //
    }
}
