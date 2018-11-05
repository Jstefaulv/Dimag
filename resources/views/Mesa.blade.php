@extends('layouts.inicioMesa')

@section('body-class', 'signup-page')
@section('style')
	<style type="text/css">
		.no-padding{
			padding-top: 0;
			padding-left: 0;
			padding-bottom: 0;
			padding-right: 0;
		}
	</style>
	<?php 
		$i = 0;
		date_default_timezone_set('America/Punta_Arenas');
	?>
@endsection
@section('content')
 <div class="container-fluid">
 	<div class="row">
 		@foreach($mesas as $mesa)
 		<div class="col-2 my-auto py-auto">
 			<div class="card">
 				@if($mesa->estado == 'Disponible')
 					@if(Auth::User()->codigo != null)
 						<button class="btn btn-link" style="background-color: #4CAF50; color: black; text-align: right;" data-toggle="modal" data-target="#MesaDiponible{{($mesa->id)}}" aria-expanded="true" aria-controls="collapseOne">
							<div class="row justify-content-between">
								<div style="padding: 0;" class="col-2 h6"></div>
								<div class="w-100"></div>
								<div style="padding: 0;" class="col-2 h6"></div>
								<div style="padding: 0;" class="col-2 h6">
									<b>{{ ($mesa->NumeroMesa) }}</b>
								</div>
							</div>
						</button>	
 					@elseif(Auth::User() ->codigo == null)
 						<button class="btn btn-link" style="background-color: #4CAF50; color: black; text-align: right;" data-toggle="modal" data-target="#IncioCodTrab" aria-expanded="true" aria-controls="collapseOne">
							<div class="row justify-content-between">
								<div style="padding: 0;" class="col-2 h6"></div>
								<div class="w-100"></div>
								<div style="padding: 0;" class="col-2 h6"></div>
								<div style="padding: 0;" class="col-2 h6">
									<b>{{ ($mesa->NumeroMesa) }}</b>
								</div>
							</div>
						</button>
 					@endif
				@elseif($mesa->estado == 'Consumiendo')
					<button class="btn btn-link" style="background-color: #EADE02; color: black;" data-toggle="modal" data-target="#verPedidoModal{{ $mesa->id }}"" aria-expanded="true" aria-controls="collapseOne">
						<div class="row">
							<div style="padding: 0;" class="col-12">
								G: {{ $mesa->pedido->user->name }}<br>
								
							</div>
						</div>
						<div class="row justify-content-between">
							<div style="padding: 0;" class="col-2 h6">
								T: <span>{{ $mesa->pedido->updated_at->format('H:i') }}</span>
							</div>
							<div style="padding: 0;" class="col-2 h6">
								<b>{{ ($mesa->NumeroMesa) }}</b>
							</div>
						</div>
					</button>
				@elseif($mesa->estado == 'Sin Tiempo')
					<button class="btn btn-link" style="background-color: #F33527; color: black; text-align: right;" data-toggle="modal" data-target="#verPedidoModal{{ $mesa->id }}" >
						<div class="row">
							<div style="padding: 0;" class="col-12">
								G: {{ $mesa->pedido->user->name }}
							</div>
						</div>
						<div class="row justify-content-between">
							<div style="padding: 0;" class="col-2 h6">
								T: <span>00:00</span>
							</div>
							<div style="padding: 0;" class="col-2 h6">
								<b>{{ ($mesa->NumeroMesa) }}</b>
							</div>
						</div>
					</button>
 				@endif
 			</div>
 		</div>
 		@endforeach
 	</div>
	<hr>
	<div class="row justify-content-between">
		<div class="col">
			<label style="text-align: center;">
				Codigo Trabajador: 
				@if(Auth::User()->codigo == null)
				<button type="button" class="btn btn-link" data-toggle="modal" data-target="#IncioCodTrab">
					Ingrese su código.
				</button>
				@endif
				{{ Auth::User()->codigo }} 
			</label>
		</div>
		<div class="col-2">
			<a href="{{ url('/home') }}" class="btn btn-warning ml-auto"><i class="material-icons">arrow_back</i> Volver</a>
		</div>
	</div>
	<hr>
 
 	<!--------------------------------------------------------------------------->
 	<!-- 							INICIO MODALES					   		   -->
 	<!--------------------------------------------------------------------------->
	@foreach($mesas as $mesa)	
		@if($mesa->estado == 'Disponible')
			<div class="modal fade" id="MesaDiponible{{($mesa->id)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Mesa {{ $mesa->id }}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form method="post" action="{{ url('/mesas/'.$mesa->id) }}">
							{{ csrf_field() }}
							<div class="modal-body">
								<input type="hidden" value="{{ $mesa->id }}" name="id">
								<label for="cantidad{{ $mesa->id }}">Numero de personas</label>
								<div class="row">
									<div class="col-4">
										<button class="btn btn-link ml-5" type="button" id="menos" onclick="javascript: contadormenos{{$mesa->id}}()">
											<i class="material-icons">remove</i>
										</button>
									</div>
									<div class="col-4">
										<input id="cantidad{{ $mesa->id }}" name="cantidad" class="form-control mt-1 mr-6" type="text" style="text-align: center;" value="1">
									</div>
									<div class="col-4">
										<button class="btn btn-link" type="button" id="mas" onclick="javascript: contadormas{{$mesa->id}}()">
											<i class="material-icons">add</i>
										</button>
									</div>
								</div>  
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-success">Aceptar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script language="javascript"> 
				var i{{$mesa->id}} = 1; 
				function contadormas{{$mesa->id}}(){ 
					i{{$mesa->id}} = i{{$mesa->id}} + 1; 
					var cant = document.getElementById("cantidad{{ $mesa->id }}"); 
					cant.value = i{{$mesa->id}};
					if(cant.value == 1){
						i{{$mesa->id}} =1;
						cant.value="1";
					}
				}
				function contadormenos{{$mesa->id}}(){ 
					if(i{{$mesa->id}}>=2){
						i{{$mesa->id}} = i{{$mesa->id}} - 1; 
						var cant = document.getElementById("cantidad{{ $mesa->id }}"); 
						cant.value = i{{$mesa->id}};
						if(cant.value == 1){
							i{{$mesa->id}} =1;
							cant.value="1";
						}
					}
				}
			</script>
			<?php 
				$i = $i + 1;
			?>
		@elseif($mesa->estado == 'Consumiendo')
			<!-- Modal para ver el pedido de una mesa -->
			<div class="modal fade" id="verPedidoModal{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Pedido # {{$mesa->pedido->id}} | Mesa {{ $mesa->NumeroMesa }} | Pers. {{ $mesa->cantidad }}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="table-responsive-md">
								<?php $total = 0; ?>
								<table class="table">
									<thead>
										<th>Cod.</th>
										<th>Producto</th>
										<th>Cant.</th>
										<th>Precio</th>
										<th>Total</th>
										<th>#Comanda</th>
										<th>Mensajes</th>
										@if(Auth::User()->rol == 1)
											<th>Opciones</th>
										@endif
									</thead>
									<tbody>
										@foreach($detallePedidos as $detallePedido)
										@if($mesa->pedido->id == $detallePedido->idPedido)
										<tr>
											<td></td>
											<td>{{ $detallePedido->producto->nombreProducto }}</td>
											<td>x{{ $detallePedido->cantidad }}</td>
											<td>{{ $detallePedido->producto->precioProducto }}</td>
											<td>{{ $detallePedido->producto->precioProducto * $detallePedido->cantidad }}</td>
											<td></td>
											<td>{{ $detallePedido->Observacion }}</td>
											@if(Auth::User()->rol == 1)
											<td>
												<a href="{{ url('/detalle/delete/'.$detallePedido->id) }}" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-link p-0">
													<i class="material-icons p-0">clear</i>
												</a>
											</td>
											@endif
										</tr>
										<?php $total = $total + ($detallePedido->producto->precioProducto * $detallePedido->cantidad); ?>
										@endif
										@endforeach
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><h4><b>Total:</b></h4></td>
											<td><h4><b>{{ $total }}</b></h4></td>
											@if(Auth::User()->rol == 1)
											<td></td>
											@endif
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							@if(Auth::User()->rol == 1)
							<button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">Eliminar Pedido</button>
							@endif
							<a href="{{ url('/mesa/'.$mesa->id.'/pedido/') }}" class="btn btn-warning">Agregar Producto</a>
							<a href="{{ url('/pago') }}" class="btn btn-success">Emitir Cuenta
							</a>
						</div>
					</div>
				</div>
			</div>
		@elseif($mesa->estado == 'Sin Tiempo')
			<!-- Modal para ver el pedido de una mesa -->
			<div class="modal fade" id="verPedidoModal{{ $mesa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Pedido #51 | Mesa {{ $mesa->id }} </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="table-responsive-md">
								<table class="table">
									<thead>
										<th>Cantidad</th>
										<th class="col-md-3">Producto</th>
										<th class="col-md-4">Opciones</th>
									</thead>
									<tbody>
										<tr>
											<td>2x</td>
											<td>Barros Luco</td>
											<td>
												<a href="#" rel="tooltip" title="Editar Cantidad" class="btn btn-warning btn-link btn-xs">
													<i class="material-icons">create</i>
												</a>
												<a href="#" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-link btn-xs">
													<i class="material-icons">clear</i>
												</a>
											</td>
										</tr>
										<tr>
											<td>2x</td>
											<td>Jugo natural</td>
											<td>
												<a href="#" rel="tooltip" title="Editar Cantidad" class="btn btn-warning btn-link btn-xs">
													<i class="material-icons">create</i>
												</a>
												<a href="#" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-link btn-xs">
													<i class="material-icons">clear</i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">Eliminar Pedido</button>
							<a href="{{ url('/pago') }}" class="btn btn-success">Pagar</a>
						</div>
					</div>
				</div>
			</div>
		@endif
	@endforeach
	<!-- Modal Para iniciar sesion por codigo de trabajador -->
	<div class="modal fade" id="IncioCodTrab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="{{ url('/codigo') }}">
					{{ csrf_field() }}
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ingrese su código</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="codigotrabajador">N° de código</label>
							<input type="text" class="form-control" name="codigotrabajador">	
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-success">Ingresar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--------------------------------------------------------------------------->
 	<!-- 		                		FIN MODALES		    		   		   -->
 	<!--------------------------------------------------------------------------->
 </div>
@endsection
@section('script')
	
@endsection


<!--
| {{ date('m/d/y') }} | {{ date('G:i') }}
-->

<!-- 
<div style="width: 100%;text-align: left;">
							<span id="time{{ $i }}">45:00</span>
							<span> - {{ $mesa->pedido->user->name }}</span>
						</div>
						<h4><b>{{ ($mesa->NumeroMesa) }}</b></h4>

 -->