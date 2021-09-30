<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $with = ['detalle'];

    public function detalle()
    {
        return $this->hasOne(ProductoDetalle::class);
    }

    public function tipoArmazon()
    {
        return $this->belongsTo(TipoArmazon::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function forma()
    {
        return $this->belongsTo(Forma::class);
    }

    public function inventario()
    {
        return $this->hasOne(Inventario::class);
    }
}
