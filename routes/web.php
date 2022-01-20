<?php

use App\Models\curso;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\MensajeWeb;
use App\Models\profesor;
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

Route::get('/', function () {

    
    $cursos = DB::table('cursos')->orderByDesc('priority')->take(8)->get();
    $profesores = DB::table('profesors')->orderByDesc('priority')->take(8)->get();



    $nombreRuta = 'landing';
    return view('welcome')->with('ruta',$nombreRuta)->with('profesores',$profesores)->with('cursos',$cursos);
});

Route::get('/home', function () {
    
    $mensajeWeb = MensajeWeb::all();
    return view('home')->with('mensajeWeb',$mensajeWeb);
})->middleware('auth');

Route::get('/nosotros', function () {
    $nombreRuta = 'nosotros';
    return view('nosotros')->with('ruta',$nombreRuta);
});

Route::get('/profesor', function () {
    $nombreRuta = 'profesor';
    return view('profesor')->with('ruta',$nombreRuta);
});
Route::get('/metodologia', function () {
    $nombreRuta = 'metodologia';
    return view('metodologia')->with('ruta',$nombreRuta);
});

Route::resource('mensajeWeb','App\Http\Controllers\mensajeWebController');
Route::resource('profesor','App\Http\Controllers\ProfesorController');
Route::resource('cursos','App\Http\Controllers\CursoController');
Route::resource('descargar','App\Http\Controllers\descargasProgramaController');


