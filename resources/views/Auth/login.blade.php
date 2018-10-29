@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
	<div class="page-header header-filter" style="background-image: url('{{asset('img/foto7.jpg')}}'); background-position: center;">
    @if(session()->has('flash'))
        <div class="alert alert-danger">
            {{session('flash')}}
        </div>
       @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="{{ url('/login') }}">
            	{{ csrf_field() }}
              <div class="card-header card-header-success  text-center">
                <h4 class="card-title"><img src="{{ asset('/img/LogoIntermedio.png') }}"></h4>
                
              </div>
              
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" id="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Usuario">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Contraseña">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success  btn-wd btn-lg">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection