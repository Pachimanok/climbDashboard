<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\MensajeWeb;

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
    $nombreRuta = 'landing';
    return view('welcome')->with('ruta',$nombreRuta);
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
