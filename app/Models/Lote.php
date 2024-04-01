<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedors_id');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productos_id');
    }
}
