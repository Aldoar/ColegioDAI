<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ColegioDAI</title>
    <!-- Estilo -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/Estilo.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/fondo.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">   
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="app">  
        <div class="container">
            @yield('nav')
        </div>
        <div class="container">
            <div class="cuerpo">
            @yield('cuerpo')
        
            </div>
        </div>
    <footer>
        Colegio DAI
    </footer>
    <!-- Scripts -->
    
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <scrispt src="{{ asset('js/toastr.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script  src="{{ asset('js/inspector.js') }}"></script>
    <scrispt src="{{ asset('js/funciones.js')}}"></script>    
    <!-- Se utiliza para Jquery.Table -->
    <script type="text/javascript">    
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
    <!-- Se utiliza para Jquery.Table -->
    
</body>
</html>
