@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar proveedor</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/proveedores')}}" class="btn btn-sm btn-success" >
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
            <form role="form" action="{{ url('/proveedores/'. $proveedor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombreProv">Nombre del proveedor</label>
                    <input type="text" name="nombreProv" class="form-control" value="{{old('nombreProv', $proveedor->nombreProv)}}"  required>
                </div>

                <div class="form-group">
                    <label for="telefono">Número de teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{old('telefono', $proveedor->telefono)}}"  required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" name="correo" class="form-control" value="{{old('correo', $proveedor->correo)}}"  required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección proveedor</label>
                    <input type="text" name="direccion" class="form-control" value="{{old('direccion', $proveedor->direccion)}}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar Proveedor</button>
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