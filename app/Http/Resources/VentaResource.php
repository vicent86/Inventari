<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VentaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cliente_id' => new ClienteResource($this->cliente),
            'precio_total'=> $this->precio_total,
            'fecha_venta' => $this->fecha_venta, 
        ];
    }
}
