@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Gestión usuarios</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/gestionusuarios/crear')}}" class="btn btn-sm btn-primary">Nuevo usuario</a>
            </div>
          </div>
        </div>
        <div class="card-body">
            {{-- @if(session('notification'))
              <div class="alert alert-success" role="alert">
                  {{session('notification')}}
              </div>
            @endif --}}

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Código usuario</th>
                <th scope="col">Nombre</th>  
                {{-- <th scope="col">Dirección</th>               --}}
                <th scope="col">Correo electrónico</th>
                <th scope="col">Edad</th>
                <th scope="col">Tipo de usuario</th>
                <th>Acciones</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($gestionusuarios as $gestionusuario)           
              <tr>
                <td>
                  {{ $gestionusuario->id }}
                </td>
                <th scope="row">
                  {{$gestionusuario->name}}
                </th>
                {{-- <td>
                    {{ $gestionusuario->direccion }}
                  </td> --}}
                  
                <td>
                    {{ $gestionusuario->email }}
                  </td>
                  <td>
                    {{$gestionusuario->edad}}
                  </td>
                <td>
                    {{$gestionusuario->typeUser->nombreTipo}}
                  </td> 
                  
                  
                <td> 
                 
                  <form action="{{ url('/gestionusuarios/'.$gestionusuario->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url('/gestionusuarios/'.$gestionusuario->id.'/editar')}}" class="btn btn-sm btn-primary">Editar</a> 
                    {{-- <button type="submit" class="btn btn-sm btn-danger">Eliminar</button> --}}
                  </form>
                  
                 
                </td>
                    
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
@endsection
{{-- //Código de especialidades de editar y eliminar
<form action="{{ url('/especialidades/'.$especialidad->id)}}" method="POST">
    @csrf
    @method('DELETE')
    
    <a href="{{ url('/especialidades/'.$especialidad->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
    </form>  --}}

    {{-- iconos 
    <i class="ni ni-check-bold"></i>
    <i class="ni ni-fat-delete"></i> --}}