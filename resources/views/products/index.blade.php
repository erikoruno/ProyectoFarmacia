@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Productos</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/productos/create')}}" class="btn btn-sm btn-primary">Nuevo producto</a>
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
                <th scope="col">Código producto</th>
                <th scope="col">Nombre producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Laboratorio</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)           
              <tr>
                <td>
                  {{ $producto->id }}
                </td>
                <th scope="row">
                  {{$producto->nombreProd}}
                </th>
                <td>
                  {{$producto->precio}}
                </td>
                <td>
                    {{$producto->categoria->nombreCategoria}}
                  </td>
                  <td>
                    {{$producto->laboratorio->nombreLaboratorio}}
                  </td>
                <td> 
                 
                  <form action="{{ url('/productos/'.$producto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url('/productos/'.$producto->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
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