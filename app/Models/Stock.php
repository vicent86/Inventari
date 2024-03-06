<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected  $fillable = [
        'producto_id',
        'cantidad',
        'ultima_actualizacion',
        'localizacion'
    ];

    public function productos() {
        return $this->hasMany(Producto::class, "id", "producto_id");
    }
}
