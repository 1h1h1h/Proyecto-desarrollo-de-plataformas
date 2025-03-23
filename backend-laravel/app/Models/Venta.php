<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente', 'id_articulo', 'unidades', 'total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function inventario()
    {
        return $this->belongsTo(Inventario::class, 'id_articulo');
    }
}

?>