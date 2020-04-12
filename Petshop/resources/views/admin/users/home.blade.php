@extends('admin.master')

@section('title', 'Usuarios') {{-- sobreescribo el valor del titulo --}}

@section('breadcrumb')

<li class="breadcrumb-item">
<a href="{{ url('/admi/users') }}"><i class="fas fa-users"></i>Usuarios</a>
</li>

@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users"></i>Usuarios</h2>
        </div>

        <div class="inside">
            {{-- creo la lista de Usuarios --}}

            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        {{-- dejo uno vacio para el boton de editar --}}
                        <td></td>
                    </tr>
                </thead>
                {{-- cuerpo de la tabla --}}
                <tbody>
                    {{-- foreach con la variable users que paso en el controlador --}}
                    @foreach($users as $user)
                        <tr>
                            {{-- escapo los datos de la bd --}}
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="opts">
                                    <a href="{{ url('/admin/user/'.$user->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('/admin/user/'.$user->id.'/delete')}}"><i class="fas fa-trash"></i></a>
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