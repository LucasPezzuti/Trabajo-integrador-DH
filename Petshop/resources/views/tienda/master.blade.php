<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- archivo css para la carpeta admin --}}
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
    {{-- fuente roboto de google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- font awesome iconos --}}
    <script src="https://kit.fontawesome.com/cf91392eed.js" crossorigin="anonymous"></script>
    {{-- jquery para tooltips --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- fancybox para imagenes --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- ckeditor es para visualizar editor de textos, lo baje desde su pagina y lo pegue en la carpeta public/static/libs --}}
    <script src="{{ url('/static/libs/ckeditor/ckeditor.js') }}"></script>
    {{-- carpeta y archivo creados para guardar funciones, necesario para llamar la funcion de ckeditor  --}}
    <script src="{{ url('/static/js/admin.js') }}"></script>

{{--     <script>
        //necesita esto jquery para iniciar
        $(document).ready(function()){
            $('[data-toggle="tooltip"]').tooltip()
        }
    </script> --}}

    <title>@yield('title') DH Petshop</title>
</head>
<body>
    


</body>
</html>