<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
    {{-- fuente roboto de google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    
    <div class="wrapper">
        {{-- cargo el sidebar de la carpeta admin --}}
        <div class="col1">@include('admin.sidebar')</div>
        <div class="col2"></div>
    </div>

</body>
</html>