<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Producto;
use App\SubFamilia;
use App\Mesa;
use App\DetallePedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id){
        $mesa = Mesa::find($id);
        $subfamilias = SubFamilia::get();
        $productos = Producto::get();
        $detalles = DetallePedido::where('idPedido','=',$mesa->pedido->id)->get();
        return view('Pedidos')->with(compact('productos','subfamilias','mesa','detalles'));
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
   public function store(Request $request,$idMesa){
        $mesa = Mesa::find($idMesa);
        $pedido = Pedido::find($mesa->pedido->id);
        $mesa->estado = 'Consumiendo';
        $pedido->idEstadoPedido = 2;
        $pedido->save();
        $mesa->save();
        return redirect('/'.$mesa->idSector.'/mesas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
