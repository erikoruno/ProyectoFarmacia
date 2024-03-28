@extends('layouts.form')

@section('title', 'Inicia sesión')

@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('img/brand/logo.bmp')}}" width="180" alt="">
                  <h3>Farmacia</h3>
                </a>
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
                
                
                <form role="form" action="{{ route('login') }}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" 
                    placeholder="Correo eletrónico"
                    aria-describedby="emailHelp"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Contraseña"
                    name="password" required autocomplete="current-password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input name="remember" class="form-check-input primary" type="checkbox" 
                      {{ old('remember') ? 'checked' : '' }}
                      value="" id="remember" >
                      <label class="form-check-label text-dark" for="remember">
                        Recordar sesión
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="{{ route('password.request') }}">Olvidaste tú contraseña?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Iniciar sesión</button>
                  <div class="d-flex align-items-center justify-content-center">
                    
                    <a class="text-primary fw-bold ms-2" href="{{route('register')}}">Crear nueva cuenta</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection