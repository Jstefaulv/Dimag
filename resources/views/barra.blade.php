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
 		<div class="col-2">
 			<div class="card">
 				@if($mesa->estado == 'Disponible')
 					@if(Auth::User()->codigo != null)
 						<a href="{{ url('/mesa/'.$mesa->id.'/pedido') }}" class="btn btn-link" style="background-color: #4CAF50; color: black; text-align: right;" aria-expanded="true" aria-controls="collapseOne">
							<div class="row justify-content-between">
								<div style="padding: 0;" class="col-2 h6"></div>
								<div class="w-100"></div>
								<div style="padding: 0;" class="col-2 h6"></div>
								<div style="padding: 0;" class="col-2 h6">
									<b>{{ ($mesa->NumeroMesa) }}</b>
								</div>
							</div>
						</a>
 					@elseif(Auth::User()->codigo == null)
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
					<button class="btn btn-link" style="background-color: #EADE02; color: black; text-align: right;"  aria-expanded="true" aria-controls="collapseOne">
						<div class="row">
							<div style="padding: 0;" class="col-12">
								G: {{ $mesa->pedido->user->name }}
							</div>
						</div>
						<div class="row justify-content-between">
							<div style="padding: 0;" class="col-2 h6">
								T: <span>45:00</span>
							</div>
							<div style="padding: 0;" class="col-2 h6">
								<b>{{ ($mesa->NumeroMesa) }}</b>
							</div>
						</div>
					</button>
				@elseif($mesa->estado == 'Sin Tiempo')
					<button class="btn btn-link" style="background-color: #F33527; color: black; text-align: right;" data-toggle="collapse" data-target="#collapseOne{{ ($mesa->id) }}" aria-expanded="true" aria-controls="collapseOne">
						<div class="row">
							<div style="padding: 0;" class="col-12">
								G: {{ $mesa->pedido->user->name }}
							</div>
						</div>
						<div class="row justify-content-between">
							<div style="padding: 0;" class="col-2 h6">
								T: <span>45:00</span>
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