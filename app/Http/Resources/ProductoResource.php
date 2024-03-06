<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
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
            'nombre' => $this->nombre,
            'imagen' => asset('storage/images/' . $this->imagen),
            'precio' => $this->precio,
            'categoria' => new CategoriaResource($this->categoria),
            'proveedor' => new ProveedorResource($this->proveedor),
        ];
    }
}
