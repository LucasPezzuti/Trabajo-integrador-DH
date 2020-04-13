@extends('Admin.master')

@section('title', 'Categorías')

@section('breadcrumb')

<li class="breadcrumb-item">
<a href="{{ url('/admin/categorias') }}"><i class="fas fa-folder"></i>Categorías</a>
</li>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-edit"></i>Editar Categoría</h2>
                </div>
        
                <div class="inside">
                    {{-- la variable cat almacena el id y la info ed la categoria(es la que voy a editar) --}}
                    {!! Form::open(['url' => '/admin/categorias/'.$cat->id.'/edit']) !!}
                        <label for="nombre">Nombre de la categoría:</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {{-- aca en lugar de null le paso $cat->nombre para que venga con el dato ya cargado. --}}
                            {!! Form::text('nombre', $cat->nombre, ['class' => 'form-control']) !!}
                        </div>

                        <label for="modulo" class="mtop16">Módulo</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {{-- getmodulosarray viene del archivo funciones.php, si hace falta en el futuro agregar mas modulos los puedo agregar ahi --}}
                            {!! Form::select('modulo', getModulosArray(), $cat->modulo, ['class' => 'custom-select']) !!}
                        </div>
                        
                        {{-- mtop16 es para separarlo del anterior --}}
                        <label for="icono" class="mtop16">Ícono:</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {!! Form::text('icono', $cat->icono, ['class' => 'form-control']) !!}
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


    </div>
</div>

@endsection