<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_Detalles extends Model
{
    use HasFactory;

    protected $table = 'venta__detalles';

    protected $fillable = [
        'producto_id',
        'precio_producto',
        'cantidad',
        'venta_id',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
