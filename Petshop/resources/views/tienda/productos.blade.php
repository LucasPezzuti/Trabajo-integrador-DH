@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
<div class="boxes">
    <div class="section_container">
        <div class="container">
            <div class="row">
                
                <!-- Caja -->
                <div class="col-lg-4 box_col">
                    <div class="box">
                        <div class="box_image"><img src="/static/images/foto1.png" alt=""></div>
                        <div class="box_title trans_200"><a href="{{ url('/filtrado/'.$catego='10') }}">Comida</a></div>
                    </div>
                </div>

                <!-- Caja -->
                <div class="col-lg-4 box_col">
                    <div class="box">
                        <div class="box_image"><img src="/static/images/foto2.jpg" alt=""></div>
                        <div class="box_title trans_200"><a>Ropa</a></div>
                    </div>
                </div>

                <!-- Caja -->
                <div class="col-lg-4 box_col">
                    <div class="box">
                        <div class="box_image"><img src="/static/images/foto3.jpg" alt=""></div>
                        <div class="box_title trans_200"><a>Varios</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@yield('filtro')

@endsection