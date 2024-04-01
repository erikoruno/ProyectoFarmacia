@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar laboratorio</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/laboratorios')}}" class="btn btn-sm btn-success" >
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
                @endforeach

             @endif  --}}

             
            <form role="form" action="{{ url('/laboratorios/'. $laboratorio->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombreLaboratorio">Nombre de laboratorio</label>
                    <input type="text" name="nombreLaboratorio" class="form-control" value="{{old('nombreLaboratorio', $laboratorio->nombreLaboratorio)}}"  >
                </div>
                
                <button type="submit" class="btn btn-sm btn-primary">Guardar laboratorio</button>
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