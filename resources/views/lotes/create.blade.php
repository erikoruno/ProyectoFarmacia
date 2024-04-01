@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nuevo lote</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/lotes')}}" class="btn btn-sm btn-success" >
                <i class="ti ti-arrow-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

        <div class="card-body">
            {{-- @if ($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="ti ti-bolt"></i>
                    <strong>Por favor!</strong> {{ $error}}
                </div>
                @endforeach --}}

             {{-- @endif --}}
            <form role="form" action="{{ url('/lotes')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="stock">Número de lote</label>
                    <input type="text" name="stock" class="form-control" value="{{old('stock')}}"  required>
                </div>

                <div class="form-group">
                    <label for="vencimiento">Vencimiento</label>
                    <input type="date" name="vencimiento" class="form-control" value="{{old('vencimiento')}}"  required>
                </div>
                <div class="form-group">
                    <label for="proveedors_id">Proveedor</label>
                    <select name="proveedors_id" class="form-control">
                        @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombreProv }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="productos_id">Producto</label>
                    <select name="productos_id" class="form-control">
                        @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombreProd }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Crear producto</button>
            </form>

        </div>
      </div>
    
@endsection
{{-- <div class="form-group">
    <label for="categoria_productos_id">Categoría</label>
    <select name="categoria_productos_id" class="form-control">
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombreCategoria }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="laboratorios_id">Laboratorio</label>
    <select name="laboratorios_id" class="form-control">
        @foreach ($laboratorios as $laboratorio)
        <option value="{{ $laboratorio->id }}">{{ $laboratorio->nombreLaboratorio }}</option>
        @endforeach
    </select>
</div> --}}