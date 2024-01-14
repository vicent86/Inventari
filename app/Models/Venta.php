<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function clientes() {
        return $this->hasMany(Cliente::class);
    }

    public function pagos() {
        return $this->hasMany(Pago::class);
    }

    public function ventaDetalles() {
        return $this->hasMany(Venta_Detalles::class);
    }
}
