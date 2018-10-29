<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/vaca.png')}}">
        <link rel="icon" type="image/png" href="{{asset('img/vaca.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dinos Pizza</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/material-kit.css')}}" rel="stylesheet"/>
        @yield('style')
        <style type="text/css">
            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 70px;  
            }

            img{
                width: 100%;
                height: auto;   
            }

        </style>

    </head>

    <body class = "@yield('body-class')">
       <nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/"><img src="{{ asset('/img/logoDinos.png') }}"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" data-target="#colapsada">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-transparent">
            
        </div>
        <div class="collapse navbar-collapse" id="colapsada">
            <ul class="nav navbar-nav mr-auto">
                <li><a class="nav-item active mt-md-2 mr-lg-1" href="{{ route('login') }}">Stock</a></li>
                <li><a class="nav-item" href="{{ route('login') }}">Ventas</a></li>
                <li><a class="nav-item" href="{{ route('login') }}">Produccion</a></li>
                <li><a class="nav-item" href="{{ route('login') }}">Utilitarios</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                @else
                <li class="nav-item active mt-md-2 mr-lg-1">
                    <span class="btn btn-round" style="color: white; width: 100%; font-size:70%;"><i class="material-icons">person</i> Bienvenido/a: {{ Auth::user()->name }}</span>
                </li>

                 
               <li class="button-container mt-md-2 nav-item iframe-extern">
                <form method="post" action="{{ url('logout') }}" class="form-inline ml-auto">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger btn-round btn-block"><i class="material-icons">power_settings_new</i> Cerrar Sesión </button>
                </form>
               </li>
                @endguest
            </ul>
             
        </div>
    </div>
</nav>

    <!--<div class="card">
        <div class="card-body">
            <span class="btn btn-link" style="color: black;"><i class="material-icons">person</i> Bienvenido/a: {{ Auth::user()->name }}</span>
        </div>
    </div> -->

       @if(session()->has('flash'))
        <div class="alert alert-info">
            {{session('flash')}}
        </div>
       @endif
        <div class="wrapper">
            @yield('content')
            @include('includes.footer')
        </div>
    </body>
    @yield('script')

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}" type="text/javascript"></script>

    <!-- No Core JS Files -->
    <script src="{{ asset('js/material-kit.min.js') }}" type="text/javascript"></script>
</html>

<!-- 
#9C27b0
rgb(156, 39, 176)
-->