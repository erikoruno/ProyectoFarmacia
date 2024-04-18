<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use App\Models\Laboratorio;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::with('categoria', 'laboratorio')->get();
        return view('products.index', compact('productos'));
    }
    //Método para product catalogue
    


    public function create(){
        $categorias = CategoriaProducto::all();
        $laboratorios = Laboratorio::all();
        return view('products.create', compact('categorias', 'laboratorios'));
        
    }

    public function sendData(Request $request)
    {
        
        $request->validate([
        'nombreProd' => 'required|string|max:5',
        'precio' => 'required|numeric',
        'categoria_productos_id' => 'required|exists:categoria_productos,id',
        'laboratorios_id' => 'required|exists:laboratorios,id',
    ]);

        $producto = new Producto();
        $producto->nombreProd = $request->input('nombreProd');
        $producto->precio = $request->input('precio');
        $producto->categoria_productos_id = $request->input('categoria_productos_id');
        $producto->laboratorios_id = $request->input('laboratorios_id');
        $producto->save();

    
        return redirect('/productos')->with('success', 'Producto creado correctamente');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        $categorias = CategoriaProducto::all();
        $laboratorios = Laboratorio::all();
        return view('products.edit',compact('producto','categorias','laboratorios'));
    }

    public function update(Request $request, Producto $producto)
    {
        
        $request->validate([
        'nombreProd' => 'required|string|max:5',
        'precio' => 'required|numeric',
        'categoria_productos_id' => 'required|exists:categoria_productos,id',
        'laboratorios_id' => 'required|exists:laboratorios,id',
    ]);

        $producto = Producto::findOrFail($producto->id);
    
        $producto->nombreProd = $request->input('nombreProd');
        $producto->precio = $request->input('precio');
        $producto->categoria_productos_id = $request->input('categoria_productos_id');
        $producto->laboratorios_id = $request->input('laboratorios_id');
        $producto->save();

    
        return redirect('/productos')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect('/productos')->with('success','Producto eliminado correctamente.');
    }



}
//Otra alternativa para el método destroy
// public function destroy($id)
// {
//     // Busca el producto por su ID
//     $producto = Producto::findOrFail($id);

//     // Elimina el producto
//     $producto->delete();

//     // Redirecciona a la vista de productos con un mensaje de éxito
//     return redirect('/productos')->with('success', 'Producto eliminado correctamente');
// }
