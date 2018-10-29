@extends('layouts.inicio')

@section('body-class', 'signup-page')
@section('style')
	<style type="text/css">
		.form-actions  {
			margin-left: auto;
			margin-right: auto;	
		}
	</style>
@endsection
@section('content')
	<div class="conteiner-fluid">
		<div class="row justify-content-between">
			@foreach($locales as $local)
				<div class="col-md-5 ml-3">
					<div class="card">
						<div class="card-header">
							<h3 align="center">{{ $local->nombreLocal }}</h3>
						</div>
						<div class="card-body">
							<p class="h5" style="color: black;">Ubicacion: {{ $local->direccionLocal }}</p>
							<p class="h5" style="color: black;">Horario: {{ $local->horarioAtencionLocal }}</p>
							<div class="row">
								<div class="form-actions">
									<button type="button" data-toggle="modal" data-target="#modalSector.{{$local->idLocal}}" class="btn btn-success">Seleccionar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="modalSector.{{$local->idLocal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Seleccione el Sector</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        @foreach($sectores as $sector)
				        	@if($local->id == $sector->idLocal)
					        	<a href="{{ url('/'.$sector->id.'/mesas') }}" class="btn btn-success">
					        	{{$sector->nombreSector}}
				        		</a>
				        	@else
				        		Este local no tiene sectores asociados.
					        @endif
				        @endforeach
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
				        <button type="button" class="btn btn-success">Seleccionar</button>
				      </div>
				    </div>
				  </div>
				</div>
			@endforeach
		</div>
	</div>

	
@endsection


