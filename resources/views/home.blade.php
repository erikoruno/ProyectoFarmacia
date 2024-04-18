@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<h3>Catálogo</h3>

<div class="table-responsive">
  <!-- Projects table -->
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th scope="col">Código producto</th>
        <th scope="col">Nombre producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Vencimiento</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
    {{--<tbody>
        @foreach ($catalogos as $catalogo)           
      <tr>
        <td>
          {{ $catalogo->id }}
        </td>
        {{-- <th scope="row">
          {{$catalogo->nombreProd}}
        </th> 
        <td>
          {{$catalogo->precio}}
        </td>
          <td>
            {{$catalogo->lote->stock}}
          </td>
          <td>
            {{$catalogo->lote->vencimiento}}
          </td> 
        <td>  
         
          {{-- <form action="{{ url('/catalogos/'.$producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ url('/catalogos/'.$producto->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
           
          </form> 
          
         
        </td>
            
      </tr>
      @endforeach --}}
    </tbody>
  </table>
</div>
  
@endsection
