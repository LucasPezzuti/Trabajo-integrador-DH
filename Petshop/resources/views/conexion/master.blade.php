<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--     con yield declaro una variable de titulo que voy a sobreescribir en cada vista.--}}    
 <title>PetShop - @yield('title')</title>
 <link rel="stylesheet" href="{{ url('/static/css/conexion.css?v='.time()) }}">
{{--  ?v= es una variable que paso para revisar que no guarde en cache 
    el css, que siempre lo cargue y el time nos muestra la hora en que se ejecuta para estar seguro   --}}  
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cf91392eed.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    

    @section('content')
    @show

</body>
</html>