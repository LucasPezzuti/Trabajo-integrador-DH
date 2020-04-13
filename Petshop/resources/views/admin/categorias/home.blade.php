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
                    <h2 class="title"><i class="fas fa-plus"></i>Agregar Categoría</h2>
                </div>
        
                <div class="inside">
                    {!! Form::open(['url' => '/admin/categorias/add']) !!}
                        <label for="nombre">Nombre de la categoría:</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>

                        <label for="modulo" class="mtop16">Módulo</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {{-- getmodulosarray viene del archivo funciones.php, si hace falta en el futuro agregar mas modulos los puedo agregar ahi --}}
                            {!! Form::select('modulo', getModulosArray(), 0, ['class' => 'custom-select']) !!}
                        </div>
                        
                        {{-- mtop16 es para separarlo del anterior --}}
                        <label for="icono" class="mtop16">Ícono:</label>
                        <div class="input-group"> {{-- clase de bootstrap para input --}}
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>

                            </div>
                            {!! Form::text('icono', null, ['class' => 'form-control']) !!}
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

        <div class="col-md-9">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-folder"></i>Categorías</h2>
                </div>
        
                <div class="inside">
                    <nav class="nav nav-pills nav-fill">
                        {{-- recorro el array definido en http/funciones.php (se ven los modulos) --}}
                        @foreach(getModulosArray() as $m => $k)
                    <a href="{{ url('/admin/categorias/'.$m) }}" class="nav-link">{{ $k }}</a>
                        @endforeach
                    </nav>

                    {{-- tabla para mostrar la consulta de categorias --}}
                   <table class="table mtop16">
                       <thead>
                           <tr>
                               <td width="32px"></td>
                               <td>Nombre</td>
                               <td width="140px"></td>
                           </tr>
                       </thead>
                       <tbody>
                          {{--  la variable $cats tiene el resultado de la consulta de categorias. definido en el getHome del controlador --}}
                           @foreach($cats as $cat)
                               {{--  al icono lo escapo asi porque esta hasheado con e() y tengo que volver a interpretarlo --}}
                                <tr> 
                                    {{-- la funcion htmlspecialchars_decode la uso para que la app pueda interpretar el codigo html del icono, sino solo pone el texto --}}
                                    <td>{!! htmlspecialchars_decode($cat->icono) !!}</td>
                                    <td> {{ $cat->nombre }}</td>
                                    <td>
                                        {{-- editar/eliminar --}}
                                        <div class="opts">
                                           

                                            <a href="{{ url('/admin/categorias/'.$cat->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('/admin/categorias/'.$cat->id.'/delete')}}"><i class="fas fa-trash"></i></a>


                                        </div>
                                    </td>
                                </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection