@extends('layouts.app')

@section('content')
<div class="container">
    <div class="img">
        <img src="" alt="">
    </div>
    <div class="contenido-login">
        <form action="{{ route('loginfarm') }}" method="POST">
            @csrf
            <img src="{{asset('img/brand/logo.bmp')}}" alt="">
            <h2>Farmacia</h2>
            <div class="input-div email">
                <div class="i">
                <i class="fas fa-user"></i>
                </div>
            <div class="div">
                <h5>Correo</h5>
                <input type="email" value="{{ old('email') }}" placeholder="Ingresa tú email" name="email" class="input">
            </div>
        </div>
        <div class="input-div pass">
            <div class="i">
                <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                <h5>Contraseña</h5>
                <input type="password" placeholder="Ingresa tu contraseña" name="pass" class="input">
            </div>
        </div>
        <a href="">Creado Esoft</a>
        <input type="submit" class="btn" value="Iniciar sesión">
        </form>
    </div>
    <div class="row mt-1 justify-content-center">
        <div class="col-2.5">
            <a href="" class="text"><small>¿Olvidaste tu
                    contraseña?</small></a>
        </div>
        <div class="col-3    text-right">
            <a href="" class="text"><small>Crear cuenta nueva</small></a>
        </div>
    </div>
</div>
@endsection
