<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $proveedores = Proveedor::all();
        return view('proveedors.index', compact('proveedores'));
    }

    public function create(){
        return view('proveedors.create');
    }

    public function sendData(Request $request){


        $rules = [
            'nombreProv' => 'required|min:3',
            
        ];

        $messages = [
            'nombreProv.required' => 'El nombre de proveedor es obligatorio',
            'nombreProv.min' => 'El nombre del proveedor debe de tener más de 3 caracteres'
        ];

        $this->validate($request, $rules, $messages);

        $proveedores = new Proveedor();
        $proveedores->nombreProv = $request->input('nombreProv');
        $proveedores->telefono = $request->input('telefono');
        $proveedores->correo = $request->input('correo');
        $proveedores->direccion = $request->input('direccion');
        $proveedores->save();

        return  redirect('/proveedores');
    }

    public function edit(Proveedor $proveedor){
        return view('proveedors.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedor $proveedor){


        $rules = [
            'nombreProv' => 'required|min:3',
            
        ];

        $messages = [
            'nombreProv.required' => 'El nombre de proveedor es obligatorio',
            'nombreProv.min' => 'El nombre del proveedor debe de tener más de 3 caracteres'
        ];

        $this->validate($request, $rules, $messages);

        
        $proveedor->nombreProv = $request->input('nombreProv');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->save();

        return  redirect('/proveedores');
    }

    public function destroy(Proveedor $proveedor){
        $proveedor->delete();
        return redirect('/proveedores');



    }
}
