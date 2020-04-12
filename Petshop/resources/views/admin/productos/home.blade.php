@extends('admin.master')

@section('title', 'Productos') {{-- sobreescribo el valor del titulo --}}

@section('breadcrumb')

<li class="breadcrumb-item">
<a href="{{ url('/admin/productos') }}"><i class="fas fa-boxes"></i>Productos</a>
</li>

@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-boxes"></i>Productos</h2>
        </div>

        <div class="inside">

            <div class="btns">
            <a href="{{ url('/admin/productos/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Agregar Producto</a>
            </div>
           

            <table class="table">

            </table>

        </div>
    </div>
</div>

@endsection