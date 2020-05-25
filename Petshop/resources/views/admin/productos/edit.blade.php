@extends('admin.master')

@section('title', 'Editar Producto') {{-- sobreescribo el valor del titulo --}}

@section('breadcrumb')

<li class="breadcrumb-item">
<a href="{{ url('/admin/productos') }}"><i class="fas fa-boxes"></i>Productos</a>
</li>

@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-plus"></i>Editar Producto</h2>
        </div>

        <div class="inside">
                {{-- files true para permitir las imagenes --}}
            {!! Form::open(['url'=> '/admin/productos/'.$p->id.'/edit', 'files' => true]) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="nombre">Nombre del producto:</label>
                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                        </div>
                        {!! Form::text('nombre', $p->nombre, ['class' => 'form-control']) !!} {{-- p->nombre trae el nombre del producto --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="categorias">Categoría:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::select('categorias', $cats, $p->categoria_id, ['class' => 'custom-select']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="imagen">Imagen:</label>
                    <div class="custom-file">
                        {!! Form::file('imagen', ['class' =>'custom-file-input', 'id' => 'customFile', 'accept'=>'image/*']) !!}{{--  el accept es para que solo acepte imagenes --}}
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
                    {!! Form::number('precio', $p->precio, ['class' => 'form-control', 'min' => '0.00', 'step' =>'any']) !!}
                    </div>
                </div>

                <div class="col-md-3">

                    <label for="descuento">¿En descuento?:</label>

                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-percentage"></i></span>

                        </div>
                        {{-- campo de seleccion. Le defino las opciones. 0 es no, 1 es si. El ultimo 0 es el valor default --}}
                    {!! Form::select('endescuento', ['0' => 'No', '1' => 'Si'], $p->endescuento, ['class' => 'custom-select' ]) !!}
                    </div>

                </div>


                <div class="col-md-3">

                    <label for="descuento">Descuento</label>

                    <div class="input-group"> {{-- clase de bootstrap para input --}}
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-percentage"></i></span>

                        </div>
                        
                        {!! Form::number('descuento', $p->descuento, ['class' => 'form-control', 'min' => '0.00', 'step' =>'any']) !!}
                    </div>

                </div>

            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="contenido">Descripción</label>
{{--                     le agregue el id editor para que trabaje con ckeditor--}}                    
                    {!! Form::textarea('contenido', $p->contenido, ['class' => 'form-control', 'id' => 'editor']) !!}
                </div>
            </div>
            
            {{-- creacion del boton de guardar --}}
            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection