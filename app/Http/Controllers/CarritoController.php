<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{

    public function agregarAlCarrito($id)
    {
       
        $producto = Producto::find($id);
        if ($producto) {
            $carrito = session()->get('carrito', []);
            $carrito[] = $producto;
            session()->put('carrito', $carrito);
        }
    
        
        return redirect()->back()->with('success', 'Producto agregado al carrito exitosamente.');
    }

    public function verCarrito()
   
    {
       
        $carrito = session()->get('carrito', []);

        return view('carrito.index', compact('carrito'));
    }

}
