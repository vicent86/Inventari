<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h2>Titulo: {{ $title }}</h2>
    <h2>Fecha: {{ $date }}</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID_Venta</th>
                <th>Importe</th>
                <th>IVA</th>
                <th>Total</th>
                <th>Fecha_Pago</th>
                <th>Metodo_Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_venta }}</td>
                <td>{{ $item->importe }}</td>
                <td>{{ $item->iva }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ date('d/m/Y', strtotime($item->fecha_pago))  }}</td>
                <td>@if($item->metodo_pago) Efectivo @else Targeta @endif</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
</body>
</html>