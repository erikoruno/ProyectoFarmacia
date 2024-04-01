@extends('layouts.panel')

@section('title', 'Panel')

@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nueva categoria</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/categorias')}}" class="btn btn-sm btn-success" >
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

             @endif --}}

             @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
            
            <form role="form" action="{{ url('/categorias')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombreCategoria">Nombre de la categoria</label>
                    <input type="text" name="nombreCategoria" class="form-control" value="{{old('nombreCategoria')}}"  >
                </div>

                
                
                <button type="submit" class="btn btn-sm btn-primary">Crear categoria</button>
            </form>

        </div>
      </div>
    
@endsection
