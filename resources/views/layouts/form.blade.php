<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
    </title>
    
    <!-- Favicon -->
<link href="{{asset('img/brand/favicon.png')}}"  rel="icon" type="image/png">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- Icons -->
<link href="{{asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
<link href="{{asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
<!-- CSS Files -->
<link href="{{asset('css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body >
    <img class="" src="" alt="">
   
   @yield('content')
    
</body>
 

   
<footer class="mt-6"> 
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 text-center">
                <div class="copyright text-muted">
                    &copy; 2024 <a href="#" class="font-weight-bold ml-6"></a>
                </div>
            </div>
            <div class="col-xl-6 text-center">
                <ul class="nav nav-footer justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link">¿Quiénes somos?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</html>