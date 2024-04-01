<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function index(){
        $lotes = Lote::with('proveedor', 'producto')->get();
        return view('lotes.index', compact('lotes'));
    }

    public function create(){
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('lotes.create', compact('proveedores', 'productos'));
        
    }

    public function sendData(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
        'stock' => 'required|string|max:255',
        
        'proveedors_id' => 'required|exists:proveedors,id',
        'productos_id' => 'required|exists:productos,id',
    ]);

    // Crea un nuevo producto con los datos del formulario
        $lote = new Lote();
        $lote->stock = $request->input('stock');
        $lote->vencimiento = $request->input('vencimiento');
        $lote->proveedors_id = $request->input('proveedors_id');
        $lote->productos_id = $request->input('productos_id');
        $lote->save();

    // Redirecciona a la vista de productos con un mensaje de éxito
        return redirect('/lotes')->with('success', 'Lote creado correctamente');
    }

    public function edit($id){
        $lotes = Lote::findOrFail($id);
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('lotes.edit',compact('lotes','proveedores','productos'));
    }

    public function update(Request $request, Lote $lote)
    {
        
        $request->validate([
        'stock' => 'required|string|max:255',
        
        'proveedors_id' => 'required|exists:proveedors,id',
        'productos_id' => 'required|exists:productos,id',
    ]);

        $lote = Lote::findOrFail($lote->id);
    
        $lote->stock = $request->input('stock');
        $lote->vencimiento = $request->input('vencimiento');
        $lote->proveedors_id = $request->input('proveedors_id');
        $lote->productos_id = $request->input('productos_id');
        $lote->save();

    // Redirecciona a la vista de productos con un mensaje de éxito
        return redirect('/lotes')->with('success', 'Lote actualizado correctamente');
    }

    public function destroy(Lote $lote){
        $lote->delete();
        return redirect('/lotes')->with('success','Producto eliminado correctamente.');
    }
}
