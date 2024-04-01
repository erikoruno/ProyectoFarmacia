<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(CategoriaProducto::class, 'categoria_productos_id');
    }
    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorios_id');
    }
}