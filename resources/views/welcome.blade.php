<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHART</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body>

    ESTAMOS PROBANDO EL COMPONENTE CON GRAFICO

    
    @livewire('sales-chart')
    @yield('content')
    @livewireScripts
</body>
</html>