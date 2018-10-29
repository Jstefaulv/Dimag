<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Producto;
use App\SubFamilia;
use App\Mesa;
use App\DetallePedido;
use DateTime;
class DetallePedidoController extends Controller
{
    public function index($idmesa){
    	$subfamilias = SubFamilia::get();
        $productos = Producto::get();
        $now = new DateTime();
        return view('pedido')->with(compact('productos','subfamilias','now'));
    }

    public function store(Request $request, $idmesa){
    	$mesa = Mesa::find($idmesa);
        $pedido = Pedido::find($mesa->pedido->id);
        $detallePedido = new DetallePedido();
        $detallePedido->idProducto = $request->input('idProduct'); 
        $detallePedido->idPedido = $pedido->id; 
        if($request->input('observacion')){
            $detallePedido->Observacion = $request->input('observacion');
        }
        $detallePedido->cantidad = $request->input('cantidad');
        $detallePedido->save();
        return back();
    }

    public function deleteProducto($id){
        DetallePedido::find($id)->delete();
        return back();
    }

    public function delete(Request $request, $idmesa){
        $mesa = Mesa::find($idmesa);
        $pedido = Pedido::find($mesa->pedido->id);
        $detalles = DetallePedido::where('idPedido','=',$mesa->pedido->id)->get();
        foreach ($detalles as $detalle) {
            $detalle->delete();
        }
        return redirect('/'.$mesa->idSector.'/mesas');
    }

}
