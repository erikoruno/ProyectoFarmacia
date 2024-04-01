@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Proveedores</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/proveedores/create')}}" class="btn btn-sm btn-primary">Nuevo proveedor</a>
            </div>
          </div>
        </div>
        <div class="card-body">
            {{-- @if(session('notification'))
              <div class="alert alert-success" role="alert">
                  {{session('notification')}}
              </div>
            @endif --}}
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nombre proveedor</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Dirección</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)           
              <tr>
                <th scope="row">
                  {{$proveedor->nombreProv}}
                </th>
                <td>
                  {{$proveedor->telefono}}
                </td>
                <td>
                    {{$proveedor->correo}}
                  </td>
                  <td>
                    {{$proveedor->direccion}}
                  </td>
                <td>
                 
                  <form action="{{ url('/proveedores/'.$proveedor->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url('/proveedores/'.$proveedor->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
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