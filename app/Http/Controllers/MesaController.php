<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\DetallePedido;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $mesas = Mesa::where('idSector','=',$id)->get();
        $detallePedidos = DetallePedido::get();
        if($id == 3){
            return view('barra')->with(compact('mesas','detallePedidos'));
        }else if($id == 4){
            return view('otros')->with(compact('mesas','detallePedidos'));
        }
        return view('Mesa')->with(compact('mesas','detallePedidos'));
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
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        //
    }

    public function AsignarCantidad(Request $request,$idMesa){
        $mesa = Mesa::find($idMesa);
        $mesa->cantidad = $request->input('cantidad');
        $mesa->save();
        //se debe modificar para agregar productos.
        return redirect('/mesa/'.$mesa->id.'/pedido');
    }
}
