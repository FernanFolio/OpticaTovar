<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected  $fillable = ['foto_url', 'foto_public_id'];

    public $timestamps = false;
}
