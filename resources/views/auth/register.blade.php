@extends('layouts.form')

@section('title', 'Registrate')

@section('content')
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<div
  class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
  <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
      <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
          <div class="card-body d-flex flex-column align-items-center">
            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
              <img src="{{asset('images/logos/dark-logo.svg')}}" width="180" alt="">
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

            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="mb-3">
                {{-- <label for="exampleInputtext1" class="form-label">Nombre</label> --}}
                <input type="text" class="form-control" placeholder="Nombre" 
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              <div class="mb-3">
                {{-- <label for="exampleInputEmail1" class="form-label">Email Address</label> --}}
                <input type="email" class="form-control" placeholder="Correo electrónico" 
                name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
              <div class="mb-4">
                {{-- <label for="exampleInputPassword1" class="form-label">Password</label> --}}
                <input type="password" class="form-control" placeholder="Contraseña"
                name="password" required autocomplete="new-password">
              </div>
              <div class="mb-4">
                {{-- <label for="exampleInputPassword1" class="form-label">Password</label> --}}
                <input type="password" class="form-control" placeholder="Repetir Contraseña"
                name="password_confirmation" required autocomplete="new-password">
              </div>
              <button type="submit" class="btn btn-primary w-100 py-2 fs-4 mb-4 rounded-2">Registrarse</button>
              <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
@endsection
