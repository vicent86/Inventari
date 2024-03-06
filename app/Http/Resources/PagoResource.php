<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Venta;

class PagoResource extends JsonResource
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
            'id_venta' => new VentaResource(Venta::find($this->id_venta)),
            'importe' => $this->importe,
            'iva' => $this->iva,
            'total' => number_format($this->importe+($this->importe*$this->iva/100),2),
            'fecha_pago' => $this->fecha_pago,
            'metodo_pago' => $this->metodo_pago,
        ];
    }
}
