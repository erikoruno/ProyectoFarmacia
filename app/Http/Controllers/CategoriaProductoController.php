<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    public function index(){
        $categorias = CategoriaProducto::all();
        return view('categories.index', compact('categorias'));
    }

    public function create(){
        return view('categories.create')->with('success','Categoria creada correctamente.');
    }

    public function sendData(Request $request){


        $rules = [
             'nombreCategoria' => 'required|min:3',
            
        ];

         $messages = [
           'nombreCategoria.required' => 'El nombre de la categoria es obligatorio',
           'nombreCategoria.min' => 'El nombre de la categoria debe de tener más de 3 caracteres'
        ];

        $this->validate($request, $rules, $messages);

        $categorias = new CategoriaProducto();
        $categorias->nombreCategoria = $request->input('nombreCategoria');
        
        $categorias->save();

        return  redirect('/categorias');
    }

    public function edit(CategoriaProducto $categoria){
        return view('categories.edit',compact('categoria'));
    }

    public function update(Request $request, CategoriaProducto $categoria){
        $rules = [
            'nombreCategoria' => 'required|min:3',
           
       ];

        $messages = [
          'nombreCategoria.required' => 'El nombre de la categoria es obligatorio',
          'nombreCategoria.min' => 'El nombre de la categoria debe de tener más de 3 caracteres'
       ];

       $this->validate($request, $rules, $messages);

    
       $categoria->nombreCategoria = $request->input('nombreCategoria');
       
       $categoria->save();

       return  redirect('/categorias');
    }

    public function destroy($id){

        $productos = Producto::where('categoria_productos_id', $id)->exists();


        if($productos){
            return redirect()->back()->with('error','No puedes eliminar esta categoria por que tiene productos asociados.');
        }

        CategoriaProducto::findOrFail($id)->delete();
       
        return redirect('/categorias')->with('success','Categoria eliminada correctamente.');
    }
}
