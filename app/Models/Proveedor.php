<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'direccion',
        'email',
        'cif',
        'estado',
        'cualificacion',
    ];

    public function producto() {
        return $this->hasMany(Producto::class);
    }
}
