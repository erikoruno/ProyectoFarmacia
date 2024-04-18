<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(){
        $catalogos = Producto::with('lote')->get();
        return view('catalogue.index', compact('catalogos'));
    }
}
