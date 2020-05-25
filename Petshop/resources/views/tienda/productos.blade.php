@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
{{-- 
@foreach ($categorias as $categoria)
    <li><a href="">{{ $categoria->nombre }}</a></li>
@endforeach

 --}}
 <div class="products">
    <div class="section_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="products_container grid">
                        @foreach ($productos as $producto)
                        <div class="product grid-item hot">
                            <div class="product_inner">
                               
                                <div class="product_image">

                                <a href="{{ url('/uploads/'.$producto->file_path.'/'.$producto->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                    <img src="{{ url('/uploads/'.$producto->file_path.'/t_'.$producto->imagen) }}" width="300" alt="product"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                </a>

                                </div>

                                <div class="product_content text-center">
                                    
                                    <a href="{{ url('/ver', $producto->nombre) }}"><div class="product_title">{{ $producto->nombre }}</div></a>
                                    <div class="product_price">{{ $producto->precio }}</div>

                                </div>
                                <div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
                            </div>	
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection