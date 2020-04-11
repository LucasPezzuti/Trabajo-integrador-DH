@extends('conexion.master')
@section('title','login')
@section('content')
<div class="box box_login shadow">
   {{-- escapo codigo html usando htmlcollective. le paso dentro del array donde se hara la peticion, en este caso url=> /login
    el null en email es el parametro por defecto, y en el array van sus atributos, por ejemplo la clase de bootstrap form control--}}

    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/images/logo2.png') }}">
        </a>
    </div>
    <div class ="inside">
        {!! Form::open(['url' => '/login']) !!}
        <label for="email">Email</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-envelope"></i>
                </div>
            </div>
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <label for="email" class="mtop16">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i>
                </div>
            </div>
        {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}  



            {{-- es un condicional en blade, si hay una variable de sesion "message" nos muestra el tipo de alerta y la lista de errores--}} 

        @if(Session::has('message'))
        <div>
            <div class="alert alert {{ Session::get('typealert') }}" style="display:none;">
                {{ Session::get('message') }}
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>                    
                    @endforeach
                </ul>
                @endif
                <script>
                    $('.alert').slideDown();
                    setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                </script>
            </div>
        </div>
        @endif


        
        <div class="footer mtop16">
            <a href="{{ url('/registro') }}">¿No posees una cuenta? Regístrate!</a>
            <a href="{{ url('/recuperar') }}">Recuperar contraseña</a>
        </div>

    </div>
</div>
@stop