<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
</head>

<ul class="">
    <li class="">
        <a class="" href="{{ route('register') }}">
            <i class="ni ni-circle-08 "></i>
            <span class="nav-link-inner--text">Registrate</span>
        </a>
    </li>
    <li class="">
        <a class="" href="{{ route('login') }}">
            <i class="ni ni-key-25 "></i>
            <span class="nav-link-inner--text">Iniciar sesión</span>
        </a>
    </li>
</ul>

<body>
    
<div class="main-content">

    <!-- Navbar items -->
   

  <!--  Body Wrapper -->
  <h1 class="text-white text-center mb-4">@yield('title', 'Bienvenido')</h1>
  @yield('content')
  <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</div>
</body>

</html>