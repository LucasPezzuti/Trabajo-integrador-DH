@extends('admin.master')

@section('title', 'Agregar Producto') {{-- sobreescribo el valor del titulo --}}

@section('breadcrumb')

<li class="breadcrumb-item">
<a href="{{ url('/admin/productos') }}"><i class="fas fa-boxes"></i>Productos</a>
</li>

<li class="breadcrumb-item">
    <a href="{{ url('/admin/productos/add') }}"><i class="fas fa-plus"></i>Agregar Producto</a>
    </li>
@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-plus"></i>Agregar Producto</h2>
        </div>

        <div class="inside">

            {!! Form::open(['url'=> '/admin/productos/add']) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nombre del producto:</label>
                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="name">Categoría:</label>
                </div>

                <div class="col-md-3">
                    <label for="name">Imagen:</label>
                    <div class="custom-file">
                        {!! Form::file('img', ['class' =>'custom-file-input', 'id' => 'customFile']) !!}
                        <label class="custom-file-label" for="customFile">Elegir imagen</label>
                    </div>
                </div>

            </div>

            <div class="row mtop16">
                <div class="col-md-3">
                    <label for="precio">Precio:</label>

                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>

                        </div>
                        {{-- min es el minimo, step es para decimales --}}
                    {!! Form::number('precio', null, ['class' => 'form-control', 'min' => '0.00', 'step' =>'any']) !!}
                    </div>
                </div>

                <div class="col-md-3">

                    <label for="descuento">¿En descuento?:</label>

                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-percentage"></i></span>

                        </div>
                        {{-- campo de seleccion. Le defino las opciones. 0 es no, 1 es si. El ultimo 0 es el valor default --}}
                    {!! Form::select('indiscount', ['0' => 'No', '1' => 'Si'], 0, ['class' => 'custom-select' ]) !!}
                    </div>

                </div>

            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="content">Descripción</label>
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection