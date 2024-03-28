@extends('layouts.form')

@section('content')
<div class="container">
    <div class="img">
        <img src="" alt="">
    </div>
    <div class="contenido-login">
        

        <form role="form" action="{{ route('login') }}" method="POST">      
            @csrf

                @if($errors->any())   
                <div class="text-center text-muted mb-2">
                    <h4>Se encontro un error.</h4>
                </div>

                <div class="alert alert-danger mb-4" role="alert">
                    {{ $errors->first() }}
                </div>

                @else
                    <div class="text-center text-muted mb-4">
                        <small>Ingresa tús datos</small>
                    </div>
                @endif
            <img src="{{asset('img/brand/logo.bmp')}}" alt="">
            <h2>Farmacia</h2>
            <div class="input-div email">
                <div class="i">
                <i class="fas fa-user"></i>
                </div>
            <div class="div">
                {{-- <h5>Correo</h5> --}}
                <input type="email"  
                placeholder="Correo electrónico" name="email" 
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
        </div>
        <div class="input-div pass">
            <div class="i">
                <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                {{-- <h5>Contraseña</h5> --}}
                <input type="password" placeholder="Contraseña" 
                name="password" required autocomplete="current-password">
            </div>
        </div>
        <a href="">Creado Esoft</a>
        <input type="submit" class="btn" value="Iniciar sesión">
        </form>
    </div>
    <div class="row mt-1 justify-content-center">
        <div class="col-2.5">
            <a href="{{ route('password.request') }}" class="text"><small>¿Olvidaste tu
                    contraseña?</small></a>
        </div>
        <div class="col-3    text-right">
            <a href="{{ route('register')}}" class="text"><small>Crear cuenta nueva</small></a>
        </div>
    </div>

</div>
<script src="{{asset('js/login.js')}}">
</script>

@endsection
