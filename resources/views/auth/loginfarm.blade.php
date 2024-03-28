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
        <div class="container">

           

            <div class="img">
                <img src="" alt="">
            </div>
            <div class="contenido-login">
                    @if($errors->any())
                    <div class="text-center text-muted mb-2">
                        <h4>Se encontro el siguiente error.</h4>
                    </div>
                         <div class="alert alert-danger mb-4" role="alert">
                            {{ $errors->first() }}
                        </div>
                    @else
                        <div class="text-center text-muted mb-4">
                            <small>Ingresa tus credenciales</small>
                        </div>
                     @endif

                     
                <form role="form" action="{{ route('login') }}" method="POST">
                    @csrf

                    

                    <img src="{{asset('img/brand/logo.bmp')}}" alt="">
                    <h2>Farmacia</h2>
                    <div class="input-div email">
                        <div class="i">
                        <i class="fas fa-user"></i>
                        </div>
                    <div class="div">
                        <h5>Correo</h5>
                        <input type="email" value="{{ old('email') }}" 
                        placeholder="Correo electrónico" name="email" class="input" required autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" placeholder="Contraseña" name="password" 
                        class="input" required autocomplete="current-password">
                    </div>
                </div>
                <a href="">Creado Esoft</a>
                <input type="submit" class="btn" value="Iniciar sesión">
                </form>
            </div>
            <div class="row mt-1 justify-content-center">
                <div class="col-2.5">
                    <a href="{{ route('password.request')}}" class="text"><small>¿Olvidaste tu
                            contraseña?</small></a>
                </div>
                <div class="col-3    text-right">
                    <a href="{{ route('register')}}" class="text"><small>Crear cuenta nueva</small></a>
                </div>
            </div>
        </div>
        
    </body>

    <script src="{{asset('js/login.js')}}">

    </script>
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