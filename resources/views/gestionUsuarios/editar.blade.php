@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar usuario</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/gestionusuarios')}}" class="btn btn-sm btn-success" >
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
            <form role="form" action="{{ url('/gestionusuarios/'.$gestionusuario->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name', $gestionusuario->name)}}"  required>
                </div>
                {{-- <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{old('direccion', $gestionusuario->direccion)}}"  required>
                </div> --}}

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email"  name="email" class="form-control" value="{{old('email', $gestionusuario->email)}}"  required>
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text"  name="edad" class="form-control" value="{{old('edad', $gestionusuario->edad)}}"  required>
                </div>

                <div class="form-group">
                    <label for="type_users_id">Tipo de usuario</label>
                    <select name="type_users_id" class="form-control">
                        <option value="">Seleccionar tipo de usuario</option>
                        @foreach($tipousuarios as $tipousuario)
                            <option value="{{ $tipousuario->id }}"{{ $gestionusuario->type_users_id == $tipousuario->id ? 'selected' : '' }}>
                                {{ $tipousuario->nombreTipo }}
                            </option>
                        @endforeach
                        </select> 
                </div>

                {{-- <div class="form-group">
                    <label for="proveedors_id">Proveedor</label>
                    <select name="proveedors_id" class="form-control">
                        @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}"{{ $lotes->proveedors_id == $proveedor->id ? 'selected' : '' }}>
                            {{ $proveedor->nombreProv }}
                        </option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                

                <button type="submit" class="btn btn-sm btn-primary">Guardar usuario</button>
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