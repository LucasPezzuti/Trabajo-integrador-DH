<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('static/images/logo2.png') }}" class="img-fluid">
        </div> 
        
        <div class="user">
            <span class="subtitle">Hola:</span>

            <div class="name">
                {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}
            <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
            </div>

            <div class="email">{{ Auth::user()->email }}
            </div>
        </div>
    </div>
    
    <div class="main">
        <ul>
            <li>
            <a href="{{ url('/admin') }}"><i class="fas fa-home"></i>Administrador</a>
            </li>

            <li>
                <a href="{{ url('/admin/productos') }}"><i class="fas fa-boxes"></i>Productos</a>
            </li>

            <li>
                <a href="{{ url('/admin/categorias') }}"><i class="fas fa-folder"></i>Categorías</a>
            </li>

            <li>
                <a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>