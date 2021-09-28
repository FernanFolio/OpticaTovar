<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArmazon extends Model
{
    use HasFactory;

    protected $table = 'tipos_armazon';

    protected $fillable = ['descripcion'];

    public $timestamps = false;
}
