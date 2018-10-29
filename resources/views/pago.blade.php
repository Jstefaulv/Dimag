@extends('layouts.inicioMesa')

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
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pagar Pedido #51</h4>
        </div>
        <div class="card-body">
          <h4 style="text-align: left">Detalle</h4>
          <div class="row">
            <div class="col-md-8">
              <table class="table">
                <thead>
                  <th class="col-md-1"></th>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Valor Total</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">
                      <input class="form-check-input" type="checkbox" checked>
                    </td>
                    <td>Ave Palta</td>
                    <td>2x</td>
                    <td>10400</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">
                      <input class="form-check-input" type="checkbox" checked>
                    </td>
                    <td>Jugo Natural</td>
                    <td>2x</td>
                    <td>3200</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-4">
              <div class="card-body" style="color: white;background-color: #C0C0C0;">
                <h6 style="text-align: center;color: white"> Metodo de pago</h6>
                <hr>
                <div>
                  <input type="radio" name="MetPago" checked> Efectivo<br>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <hr>
              <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <label class="mt-3">Total a Pagar:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <label class="mt-3">Total de Pedido:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <label class="mt-3">Saldo:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="offset-md-6 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2">
                                <input class="mt-3" type="checkbox" name="" id="propinasi" checked="">
                            </div>
                            <div class="col-10">
                                <label class="mt-3">Propina Sugerida (10%):</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" id="propina" name="propina">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
            <hr>
            <div class="mr-3">
                <a class="btn btn-danger" href="{{ url('/mesas') }}" >Cancelar</a>
            </div>
            <div class="">
                <button class="btn btn-success">Procesar Pago</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
        document.getElementById('propinasi').onchange = function() {
            document.getElementById('propina').disabled = !this.checked;
        };
    </script>
@endsection