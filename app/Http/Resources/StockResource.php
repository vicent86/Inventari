<?php

namespace App\Http\Resources;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'producto_id' => new ProductoResource(Producto::find($this->producto_id)),
            'cantidad' => $this->cantidad,
            'ultima_actualizacion' => $this->updated_at->format('Y-m-d H:i'),
            'localizacion' =>  $this->localizacion,
        ];
    }
}
