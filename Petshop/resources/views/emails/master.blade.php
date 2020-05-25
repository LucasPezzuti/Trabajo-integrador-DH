<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margen: 0px; padding: 0px; background-color: #f3f3f3">
    
    <div style ="
    display:block;
    max-width: 728px;
    margin: 0px auto;
    width: 60%;
    ">
        <img src="{{ url('/static/images/logo2.png') }}" style="width: 100%; display: block;">
        <div style= "
            background-color: white;
            padding: 24px;
        ">
            @yield('content')

        </div>   
    </div>
    
</body>
</html>