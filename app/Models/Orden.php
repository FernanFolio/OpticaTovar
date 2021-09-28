<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';

    public function productos() {
        return $this->belongsToMany(Producto::class, 'orden_detalle')->withTimestamps();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
