<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'marca', 'modelo', 'precio', 'in_stock'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_articulo');
    }
}

