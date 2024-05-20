<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'precio',
        'categoria_id',
        'estado',
        'id_proveedor',
        'iva'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
    // public function ventaDetalles(){
    //     return $this->hasMany(Venta_Detalles::class);
    // }

    // public function stock() {
    //     return $this->belongsTo(Stock::class);
    // }

}
