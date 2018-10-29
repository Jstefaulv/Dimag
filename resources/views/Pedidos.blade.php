@extends('layouts.inicioMesa')
@section('body-class', 'signup-page')
@section('style')
<style type="text/css">
.form-actions  {
	margin-left: auto;
	margin-right: auto;	
}

main{
	-webkit-column-count:3;
	-moz-column-count:3;
	column-count:3;
	padding: 0;
	-moz-column-gap: 10px;
	-webkit-column-gap: 10px;
	column-gap: 10px;

	-moz-column-width: 140px;	        
	-webkit-column-width: 140px;
	column-width: 140px;
}
img {
	display:block;
	-webkit-column-span:all;
	-moz-column-span:all;
	column-span:all;
}
</style>
@endsection
@section('content')
<?php $total = 0;  ?>
<div class="container-fluid">
		<div class="row">

			<!--------------------------------------------------------------------------->
 			<!-- 							INICIO PRODUCTOS				   		   -->
 			<!--------------------------------------------------------------------------->

			<div class="col-md-2">
				<button class="btn btn-success btn-lg" style="color: white;padding: 10px 10px; font-size:150%;width: 100%;" onclick="sandwich()">
					Sandwich
					<img src="{{asset('img/sandwich.png')}}" style="width: 90px; height: 90px; display: block; margin: auto;">
				</button>

				<button class="btn btn-danger btn-lg" style="color: white; padding: 10px 10px; font-size:150%;width: 100%;" onclick="pizza()">
					Pizza
					<img src="{{asset('img/pizza.png')}}" style="width: 90px; height: 90px; display: block; margin: auto;">
				</button>

				<button class="btn btn-warning btn-lg " style="color: white; padding: 10px 10px; font-size:150%;width: 100%;" onclick="beber()">
					Bebida
					<img src="{{asset('img/bebida.png')}}" style="width: 90px; height: 90px; display: block; margin: auto;">
				</button>
			</div>
			<!--------------------------------------------------------------------------->
 			<!-- 							FIN PRODUCTOS					   		   -->
 			<!--------------------------------------------------------------------------->

			<!-- MENU FAMILIAS -->

			<div class="col-md-3">
				<div id="menuSandwich" style="display: none;">
					@foreach($subfamilias as $subfamilia)
						@if($subfamilia->idFamilia == 1)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="listaProductos('{{$subfamilia->id}}')">
							{{ $subfamilia->NombreSubFamilia }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuPizza" style="display: none;">
					@foreach($subfamilias as $subfamilia)
						@if($subfamilia->idFamilia == 2)
						<button class="btn btn-danger" style="color: white; width: 100%;" onclick="listaProductos('{{$subfamilia->id}}')">
							{{ $subfamilia->NombreSubFamilia }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuBeber" style="display: none;">
					@foreach($subfamilias as $subfamilia)
						@if($subfamilia->idFamilia == 3)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="listaProductos('{{$subfamilia->id}}')">
							{{ $subfamilia->NombreSubFamilia }}
						</button>
						@endif
					@endforeach
				</div>
			</div>
			<!-- FIN MENU FAMILIAS -->
			
			<!-- INICIO MENU PRODUCTOS -->
			
			<div class="col-md-3">
				<div id="menuProd1" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 1)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>
				
				<div id="menuProd2" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 2)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd3" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 3)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd4" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 4)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd5" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 5)
						<button class="btn btn-success" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>



				<div id="menuProd6" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 6)
						<button class="btn btn-danger" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd7" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 7)
						<button class="btn btn-danger" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd8" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 8)
						<button class="btn btn-danger" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd9" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 9)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd10" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 10)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd11" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 11)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd12" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 12)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>

				<div id="menuProd13" style="display: none;">
					@foreach($productos as $producto)
						@if($producto->idSubFamilia == 13)
						<button class="btn btn-warning" style="color: white; width: 100%;" onclick="cargarProdcuto('{{ $producto->nombreProducto }}','{{ $producto->precioProducto }}','{{ $producto->id }}')">
							{{ $producto->nombreProducto }}
						</button>
						@endif
					@endforeach
				</div>
			</div>
			<!-- FIN MENU PRODUCTOS -->
			<!-- INICIO DETALLE PEDIDO -->
			<div class="col-4">
				<form method="post" action="{{ url('/mesa/'.$mesa->id.'/addprod') }}">
					{{ csrf_field() }}
					<div class="card" id='detalleProducto' style="display: none;">
						<div class="card-header">
							<h4 class="card-title" id="NomProducto"></h4>
						</div>
						<div class="card-body">
							<input type="hidden" id="precioUni">
							<input type="hidden" id="idProduct" name="idProduct">
							<div class="row">
								<div class="col-4">
									<button class="btn btn-link" type="button" id="menos" style="width: 90px; height: 90px; display: block; background-color: #D0CFCF" onclick="minus(),calcularTotal()">
										<i class="material-icons" style="padding: all;">remove</i>
									</button>
								</div>

								<div class="col-4">
									<input id="cantidad" name="cantidad" class="form-control mt-3" type="text" style="text-align: center;" value="1">
								</div>

								<div class="col-4">
									<button class="btn btn-link" type="button" id="mas" style="width: 90px; height: 90px; display: block; background-color: #D0CFCF" onclick="more(),calcularTotal()">
										<i class="material-icons orange600">add</i>
									</button>
								</div>
								<div class="w-100"></div>
								<div class="col-12">
									<textarea class="form-control" name="observacion" id="" cols="30" rows="3"></textarea>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<hr>
							<h3 id="precio">Total $ </h3>
						</div>
						<button type="submit" class="btn btn">Agregar</button>
					</div>
				</form>

				<form method="post" action="{{ url('/mesa/'.$mesa->id.'/comanda') }}">
					{{ csrf_field() }}
					<div style="margin-top: 60px;" class="card">
						<div class="card-header card-header-success">
							<h4 class="card-title">RESUMEN PEDIDO</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<th>producto</th>
									<th align="center">cantidad</th>
									<th align="center">OP</th>
								</thead>
								<tbody>
									@if($detalles)
										@foreach($detalles as $detalle)
										<tr>
											<td>{{ $detalle->producto->nombreProducto }}</td>
											<td align="center">{{ $detalle->cantidad }}</td>
											<td align="center"><a href="{{ url('/detalle/delete/'.$detalle->id) }}"><i class="material-icons">cancel</i></a></td>
										</tr>
										<?php 
											$total = $total + ($detalle->producto->precioProducto * $detalle->cantidad); 
										?>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<hr>
							<div class="form-inline">
								<label class="mt-4" id="precio">Total $ </label>
								<input class="form-control" type="text" id="precioTotal" readonly=" " value="{{ $total }}">
							</div>
						</div>
						<button type="submit" class="btn btn-success btn-lg btn-block">Enviar Comanda</button>
						@if(Auth::User()->rol == 1)
						<a href="{{ url('/mesa/'.$mesa->id.'/delete') }}" class="btn btn-default">
							<i class="material-icons">arrow_back</i> Cancelar
						</a>
						@endif
					</div>
				</form>

			</div>
			<!-- FIN DETALLE PEDIDO -->

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
		<div class="col">

		</div>
		<div class="col-2">
			<a href="{{ url('/'.$mesa->idSector.'/mesas') }}" class="btn btn-warning ml-auto"><i class="material-icons">arrow_back</i> Volver</a>
		</div>
	</div><hr>
	</div>
@endsection
@section('script')
<script src="{{ asset('/js/funciones.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		PrecioTotal = document.getElementById('precioTotal').value;
		total = formatNumber(PrecioTotal);
		document.getElementById('precioTotal').value = total; 
	});
</script>
@endsection
