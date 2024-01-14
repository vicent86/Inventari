<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }

    public function proveedores(){
        return $this->hasMany(Proveedor::class);
    }
    public function ventaDetalles(){
        return $this->hasMany(Venta_Detalles::class);
    }

    public function stock() {
        return $this->hasMany(Stock::class);
    }

}
