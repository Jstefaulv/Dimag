@extends('layouts.inicioMesa')

@section('body-class', 'signup-page')
@section('style')
	<style type="text/css">
	
	</style>
	<?php $i = 0 ?>
@endsection
@section('content')
 <div class="container-fluid">
 	<div class="row">
 		@foreach($mesas as $mesa)
 		<div class="col-md-2">
 			<div class="card">
 				@if($mesa->estado == 'Disponible')
 					@if(Auth::User()->codigo != null)
 						<button class="btn btn-link" style="background-color: #4CAF50; color: black; text-align: right;" data-toggle="modal" data-target="#MesaDiponible{{($mesa->id)}}" aria-expanded="true" aria-controls="collapseOne">
							<div>
							<span>&nbsp</span>
							&nbsp
							</div>
							<h4><b>{{ ($mesa->NumeroMesa) }}</b></h4>
						</button>	
 					@elseif(Auth::User()->codigo == null)
 						<button class="btn btn-link" style="background-color: #4CAF50; color: black; text-align: right;" data-toggle="modal" data-target="#IncioCodTrab" aria-expanded="true" aria-controls="collapseOne">
							<div>
							<span>&nbsp</span>
							&nbsp
							</div>
							<h4><b>{{ ($mesa->NumeroMesa) }}</b></h4>
						</button>
 					@endif
				@elseif($mesa->estado == 'Consumiendo')
					<button class="btn btn-link" style="background-color: #EADE02; color: black; text-align: right;" data-toggle="collapse" data-target="#collapseOne{{ ($mesa->id) }}" aria-expanded="true" aria-controls="collapseOne">
						<div style="width: 100%;text-align: left;">
							<span id="time{{ $i }}">45:00 - {{ $mesa->pedido->user->name }}</span>
							
						</div>
						<h4><b>{{ ($mesa->NumeroMesa) }}</b></h4>
					</button>
					<div id="collapseOne{{ ($mesa->id) }}" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<p><b>Estado:</b> {texto}</p>
							<p><b>Hora de Pedido:</b> {hora pedido}</p>
							<p><b>Cantidad de Personas:</b> {cantidad de personas}</p>
						</div>
						<div class="card-footer" style="display: block; margin: auto; padding: 0 7px;">
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#verPedidoModal{{ $mesa->id }}">Ver Pedido</button>
						</div>
					</div>
				@elseif($mesa->estado == 'Sin Tiempo')
					<button class="btn btn-link" style="background-color: #F33527; color: black; text-align: right;" data-toggle="collapse" data-target="#collapseOne{{ ($mesa->id) }}" aria-expanded="true" aria-controls="collapseOne">
						<div style="width: 100%;text-align: left;">
							<span id="timeout">00:00 - {{ $mesa->pedido->user->name }}</span>
							
						</div>
						<h4><b>{{ ($mesa->NumeroMesa) }}</b></h4>
					</button>
					<div id="collapseOne{{ ($mesa->id) }}" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<p><b>Estado:</b> {texto}</p>
							<p><b>Hora de Pedido:</b> {hora}</p>
							<p><b>Cantidad de Personas:</b> {cantidad de personas en la mesa}</p>
						</div>
						<div class="card-footer" style="display: block; margin: auto; padding: 0 7px;">
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#verPedidoModal{{ $mesa->id }}">Ver Pedido</button>
						</div>
					</div>
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
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
							{{ csrf_field() }}
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Mesa {{ $mesa->id }}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form method="post" action="{{ url('/mesas') }}">
							<div class="modal-body">
								<input type="hidden" value="{{ $mesa->id }}" name="id">
								<div class="form-inline">
									<label for="cantidad{{ $mesa->id }}">Numero de personas</label>
									<button class="btn btn-link" type="button" id="menos" onclick="javascript: contadormenos{{$mesa->id}}()"><i class="material-icons">keyboard_arrow_left</i></button>
									<input id="cantidad{{ $mesa->id }}" name="cantidad" class="form-control" type="text" style="text-align: center;" value="1">
									<button class="btn btn-link" type="button" id="mas" onclick="javascript: contadormas{{$mesa->id}}()"><i class="material-icons">keyboard_arrow_right</i></button>  
								</div>	
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">Cancelar</button>
								<a href="{{ url('/mesa/'.$mesa->id.'/pedido') }}" type="submit" class="btn btn-success">Aceptar</a>
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
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Pedido # 51 | {{ $mesa->id }} </h5>
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
												<a href="#" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-link">
													<i class="material-icons">clear</i>
												</a>
											</td>
										</tr>
										<tr>
											<td>2x</td>
											<td>Jugo natural</td>
											<td>
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
							<a href="{{ url('/mesa/'.$mesa->id.'/pedido/') }}" class="btn btn-warning">Editar Pedido</a>
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