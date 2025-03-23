<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido1', 'apellido2', 'telefono', 'email'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_cliente');
    }
}

