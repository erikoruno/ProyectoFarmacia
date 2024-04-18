@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Categorias</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/categorias/create')}}" class="btn btn-sm btn-primary">Nueva categoria</a>
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
                <th scope="col">Nombre categoria</th>
                
                
              </tr>
            </thead>
            <tbody>

                @foreach ($categorias as $categoria)           
              <tr>
                <th scope="row">
                  {{$categoria->nombreCategoria}}
                </th>
                
                 <td>
                  <form action="{{ url('/categorias/'.$categoria->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url('/categorias/'.$categoria->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
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
