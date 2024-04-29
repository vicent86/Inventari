<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "ventas";

    protected $fillable = [
        'cliente_id',
        'precio_total',
        'fecha_venta'
    ];

    
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function pago() {
        return $this->belongsTo(Pago::class);
    }

    public function ventaDetalles() {
        return $this->hasMany(Venta_Detalles::class);
    }
}
