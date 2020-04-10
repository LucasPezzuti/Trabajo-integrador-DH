@extends('conexion.master')
@section('title','login')
@section('content')
<div class="box box_login shadow">
   {{-- escapo codigo html usando htmlcollective. le paso dentro del array donde se hara la peticion, en este caso url=> /login
    el null en email es el parametro por defecto, y en el array van sus atributos, por ejemplo la clase de bootstrap form control--}} 
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
</div>
@stop