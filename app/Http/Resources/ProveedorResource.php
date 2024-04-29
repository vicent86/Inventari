<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id ' => $this->id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'email' => $this->email,
            'cif' => $this->cif,
            'estado' => $this->estado,
            'cualificacion' => $this->cualificacion
        ];
    }
}
