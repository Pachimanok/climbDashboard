<?php

use App\Models\curso;
use App\Models\descargacurso;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\MensajeWeb;
use App\Models\profesor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* +++++++++++++++++ LANDING PAGE +++++++++++++++++ */


Route::get('/', function () {

    $cursos = DB::table('cursos')->orderBy('priority','ASC')->orderBy('id', 'ASC')->take(8)->get();
    $profesores = DB::table('profesors')->orderBy('priority','ASC')->orderBy('id', 'ASC')->take(8)->get();

    $nombreRuta = 'landing';
    return view('welcome')->with('ruta',$nombreRuta)->with('profesores',$profesores)->with('cursos',$cursos);
});


Route::get('/nosotros', function () {

    $nombreRuta = 'nosotros';
    return view('nosotros')->with('ruta',$nombreRuta);
});

Route::get('/metodologia', function () {
    
    $nombreRuta = 'metodologia';
    return view('metodologia')->with('ruta',$nombreRuta);
});

Route::resource('profesor','App\Http\Controllers\ProfesorController');
Route::resource('cursos','App\Http\Controllers\CursoController');



/* +++++++++++++++++ DASHBOARD +++++++++++++++++ */

Route::get('/home', function () {

    $ruta = 'home';
    $mensajeWeb = MensajeWeb::all();
    $descargas = DB::table('descargacursos')->get();
    $now = Carbon::now();
    $from = $now->startOfWeek()->format('Y-m-d');
    $to = $now->endOfWeek()->format('Y-m-d');
    $semana = descargacurso::whereBetween('created_at', [$from, $to])->get();

    return view('home')->with('mensajeWeb',$mensajeWeb)->with('ruta',$ruta)->with('descarga',$descargas->count())->with('semana',$semana->count());

})->middleware('auth');

Route::resource('mensajeWeb','App\Http\Controllers\mensajeWebController');
Route::resource('profesorAdmin','App\Http\Controllers\profesorAdminController');
Route::resource('cursosAdmin','App\Http\Controllers\cursoAdminController');
Route::resource('descargar','App\Http\Controllers\descargasProgramaController');


