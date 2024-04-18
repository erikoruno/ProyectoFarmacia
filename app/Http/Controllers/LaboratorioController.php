<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use App\Models\Producto;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function index(){
        $laboratorios = Laboratorio::all();
        return view('laboratory.index', compact('laboratorios'));
    }

    public function create(){
        return view('laboratory.create');
    }

    public function sendData(Request $request){


        $rules = [
             'nombreLaboratorio' => 'required|min:3',
            
        ];

         $messages = [
           'nombreLaboratorio.required' => 'El nombre del laboratorio es obligatorio',
           'nombreLaboratorio.min' => 'El nombre del laboratorio debe de tener más de 3 caracteres'
        ];

        $this->validate($request, $rules, $messages);

        $laboratorios = new Laboratorio();
        $laboratorios->nombreLaboratorio = $request->input('nombreLaboratorio');
        
        $laboratorios->save();

        return  redirect('/laboratorios');
    }

    public function edit(Laboratorio $laboratorio){
        return view('laboratory.edit',compact('laboratorio'));
    }

    public function update(Request $request, Laboratorio $laboratorio){
        $rules = [
            'nombreLaboratorio' => 'required|min:3',
           
       ];

        $messages = [
          'nombreLaboratorio.required' => 'El nombre del laboratorio es obligatorio',
          'nombreLaboratorio.min' => 'El nombre del laboratorio debe de tener más de 3 caracteres'
       ];

       $this->validate($request, $rules, $messages);

    
       $laboratorio->nombreCategoria = $request->input('nombreLaboratorio');
       
       $laboratorio->save();

       return  redirect('/laboratorios');
    }

    public function destroy($id){

        $productos = Producto::where('laboratorios_id', $id)->exists();


        if($productos){
            return redirect()->back()->with('error','No puedes eliminar esta categoria por que tiene productos asociados.');
        }

        Laboratorio::findOrFail($id)->delete();
       
        return redirect('/laboratorios')->with('success', 'Laboratorio eliminado correctamente.');
        
    }
}

    

