<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoDetalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'talla',
        'longitud_varilla',
        'ancho_puente',
        'ancho_total',
        'image_id',
        'sku',
    ];

    public $timestamps = false;

    protected $table = 'productos_detalle';

    protected $with = ['foto'];

    public function foto()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
