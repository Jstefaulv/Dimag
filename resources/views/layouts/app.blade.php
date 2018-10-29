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