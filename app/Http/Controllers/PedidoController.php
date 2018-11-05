<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Producto;
use App\SubFamilia;
use App\Mesa;
use App\Mensaje;
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

        $AgSan = Producto::where('idSubFamilia','=','16')->limit(13)->get();
        $AgSan1 = Producto::where('idSubFamilia','=','16')->skip(13)->take(15)->get();

        $AgPI = Producto::where('idSubFamilia','=','17')->limit(13)->get();
        $AgPI1 = Producto::where('idSubFamilia','=','17')->skip(13)->take(15)->get();

        $AgPG = Producto::where('idSubFamilia','=','18')->limit(13)->get();
        $AgPG1 = Producto::where('idSubFamilia','=','18')->skip(13)->take(15)->get();

        $mensajes = Mensaje::limit(14)->get();
        $mensajes1 = Mensaje::skip(14)->take(14)->get();
        return view('Pedidos')->with(compact('productos','subfamilias','mesa','detalles','mensajes','mensajes1','AgSan','AgSan1','AgPI','AgPI1','AgPG','AgPG1'));
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
