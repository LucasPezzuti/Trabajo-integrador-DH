<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--     con yield declaro una variable de titulo que voy a sobreescribir en cada vista.--}}    
 <title>PetShop - @yield('title')</title>
 <link rel="stylesheet" href="{{ url('/static/css/conexion.css') }}">

</head>
<body>
    
    @section('content')
    @show

</body>
</html>