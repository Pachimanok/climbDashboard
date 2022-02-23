<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\compra;
use App\Models\curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class compraController extends Controller
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
        $id = $_GET['id'];
        $curso = curso::find($id);
        $nombreRuta = 'cursos';
        return view('comprar')->with('curso',$curso)->with('ruta',$nombreRuta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qcel = DB::table('clientes')->where('telefono','=', $request->celular)->get();
        $isset_cliente = $qcel->count();

        if( $isset_cliente == 0 ){

            $nombre = $request->nombre . ' ' . $request->apellido;

            $cliente = new cliente();
            $cliente->nombre = $nombre;
            $cliente->telefono = $request->celular;
            $cliente->email = $request->email;
            $cliente->save();

            $id_cliente = cliente::latest('id')->first();

        }else{

            $id_cliente = $qcel[0]->id;
        }

        $curso = curso::find($request->id_curso);

        if($curso->aplica_descuento == 'si'){
            
            $dto = $curso->precio * $curso->descuento;
            $monto = $curso->precio - $dto;

        }else{

            $monto = $curso->precio;

        }

        foreach($request->metodo as $metodo);

        $compra = new compra();
        $compra->id_curso = $request->id_curso;
        $compra->id_cliente = $id_cliente;
        $compra->metodo = $metodo;
        $compra->monto = $monto;
        $compra->estado = 'falta Pagar';
        $compra->save();
        $id_compra = compra::latest('id')->first();

        return view('pagar')->with('titulo',$curso->titulo)->with('monto',$monto)->with('id',$id_compra->id);
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
        $viene = $_GET['viene'];

        if($viene == 'k78kl7654'){

            $compra = compra::find($id);
            $compra->pagado = 'si';
            $compra->save();

            $compra = compra::find($id);
            $curso = curso::find($compra->id_curso);
            $cliente = cliente::find($compra->id_curso);
       
            
            $ruta = 'cursos';
            
            return view('pagado')->with('compra',$compra)->with('curso',$curso)->with('cliente',$cliente)->with('ruta',$ruta);

        }elseif($viene == 'k78kl7655'){
            
            $compra = compra::find($id);
            $curso = curso::find($compra->id_curso);
            $cliente = cliente::find($compra->id_curso);

            $ruta = 'cursos';
            
            return view('nopagado')->with('compra',$compra)->with('curso',$curso)->with('ruta',$ruta)->with('cliente',$cliente);

        }

       
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
        //
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
}
