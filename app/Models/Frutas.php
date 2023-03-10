<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frutas extends Model
{
    use HasFactory;
    protected $fillable = [
        'fruta',
        'codigo',
        'precio',
        'cantidad',
        'impuesto',
        'fecha',
    ];
}
