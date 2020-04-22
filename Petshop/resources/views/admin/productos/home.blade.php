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
           

            <table class="table table-striped mtop16"> {{-- striped dew boostrap para tabla --}}
                <thead>
                    <tr>
                        <td>ID</td>
                        <td></td>
                        <td>Nombre</td>
                        <td>Categoría</td>
                        <td>Precio</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    {{-- el foreach es con la variable q mando desde el controlador q tiene toda la lista de productos --}}
                    @foreach($productos as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>
                            <a href="{{ url('/uploads/'.$p->file_path.'/'.$p->imagen) }}"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                <img src="{{ url('/uploads/'.$p->file_path.'/t_'.$p->imagen) }}" width="64"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                            </a>
                        <td>{{ $p->nombre }}</td>
                        <td>{{ $p->cat->nombre }}</td> {{-- aca cat es una variable que defini en el modelo de productos con la relacion a categorias. --}} 
                        <td>{{ $p->precio }}</td>
                        <td>  
                            <div class="opts">
                                <a href="{{ url('/admin/productos/'.$p->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                <a href="{{ url('/admin/productos/'.$p->id.'/delete')}}"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection