@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar producto</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/productos')}}" class="btn btn-sm btn-success" >
                <i class="ti ti-arrow-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

        <div class="card-body">
            @if ($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="ti ti-bolt"></i>
                    <strong>Por favor!</strong> {{ $error}}
                </div>
                @endforeach

             @endif

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
            
            <form role="form" action="{{ url('/productos/'.$producto->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombreProd">Nombre del producto</label>
                    <input type="text" name="nombreProd" class="form-control" value="{{old('nombreProd', $producto->nombreProd)}}"  required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio producto</label>
                    <input type="text" name="precio" class="form-control" value="{{old('precio', $producto->precio)}}"  required>
                </div>
                <div class="form-group">
                    <label for="categoria_productos_id">Categoría</label>
                    <select name="categoria_productos_id" class="form-control">
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}"{{$producto->categoria_productos_id == $categoria->id ? 'selected' : ''  }}>
                            {{ $categoria->nombreCategoria }}
                        </option>
                        @endforeach
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="laboratorios_id">Laboratorio</label>
                    <select name="laboratorios_id" class="form-control">
                        @foreach ($laboratorios as $laboratorio)
                        <option value="{{ $laboratorio->id }}"{{ $producto->laboratorios_id == $laboratorio->id ? 'selected' : ''   }}>
                            {{ $laboratorio->nombreLaboratorio }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Guardar producto</button>
            </form>

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