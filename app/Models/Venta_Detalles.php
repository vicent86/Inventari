<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_Detalles extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ventas() {
        return $this->hasMany(Venta::class);
    }
}
