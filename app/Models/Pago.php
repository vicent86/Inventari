<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';

    protected $fillable = [
        'id_venta',
        'importe',
        'iva',
        'total',
        'fecha_pago',
        'metodo_pago'
    ];

    public function totalPago()
    {
        $this->total = $this->importe + ($this->importe * $this->iva / 100);
       return $this;
    }

    public function venta(){
        return $this->belongsTo(Venta::class, 'id_venta');
    }
}
