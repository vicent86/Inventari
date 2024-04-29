<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Producto;
use App\Models\Venta;

class VentaDetallesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this-> id,
            'producto_id' => new ProductoResource(Producto::find($this->producto_id)),
            'precio_producto' => $this -> precio_producto,
            'cantidad' => $this -> cantidad, 
            'venta_id' => new VentaResource(Venta::find($this -> venta_id)),
        ];
    }
}
