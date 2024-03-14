<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Styles --}}
        <link href="css/app.css" rel="stylesheet" />
        <!-- Scripts -->
        @routes
        <script src="{{ mix('/js/app.js') }}" type="commonjs" defer></script>
        @inertiaHead

    </head>
    <body class="font-sans antialiased">
       {{-- @inertia --}}
       <div class="min-h-screen bg-gray" id="app">
       </div>
    </body>
</html>
