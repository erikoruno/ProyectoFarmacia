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

    public function lote()
    {
        return $this->hasMany(Lote::class, 'productos_id'); // Suponiendo que un Producto tiene solo un Lote asociado
    }
}
