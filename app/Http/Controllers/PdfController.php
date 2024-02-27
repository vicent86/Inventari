<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PdfController extends Controller
{
    public function imprimirPago()
    {
        $pagos = Pago::get();
        $data = [
            'title' => "Factura del Pago",
            'date' => date('d/m/Y'),
            'pagos' => $pagos,
        ];
        $pdf = PDF::loadView('pago.pdf', $data);
        return $pdf->stream('factura-del-pago-data.pdf');
    }
}
