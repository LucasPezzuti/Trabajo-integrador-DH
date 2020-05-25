@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Home') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
        <div class="home">
            
            <!--Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">
                    
                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/static/images/homef.jpg)"></div>
                        <div class="home_content_container">
                            <div class="home_content">
                                <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_discount_num">50</div>
                                    <div class="home_discount_text">29/11</div>
                                </div>
                                <div class="home_title"> | blackFriday | </div>
                                <div class="button button_1 home_button trans_200"><a href="{{ url('/productos') }}">Compra Ahora!</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/static/images/home2.jpg)"></div>
                        <div class="home_content_container">
                            <div class="home_content">
                                <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_discount_num">50</div>
                                    <div class="home_discount_text">29/11</div>
                                </div>
                                <div class="home_title"> | blackFriday | </div>
                                <div class="button button_1 home_button trans_200"><a href="{{ url('/productos') }}">Compra Ahora!</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/static/images/home3.jpg)"></div>
                        <div class="home_content_container">
                            <div class="home_content">
                                <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_discount_num">50</div>
                                    <div class="home_discount_text">29/11</div>
                                </div>
                                <div class="home_title"> | blackFriday | </div>
                                <div class="button button_1 home_button trans_200"><a href="{{ url('/productos') }}">Compra Ahora!</a></div>
                            </div>
                        </div>
                    </div>
    
                </div>
                    
                <!-- Home Slider Navigation -->
                <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="/static/images/prev.png" alt=""></div></div>
                <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="/static/images/next.png" alt=""></div></div>
    
            </div>
        </div>
    
        <!-- Cajas -->
        
        <div class="boxes">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        
                        <!-- Caja -->
                        <div class="col-lg-4 box_col">
                            <div class="box">
                                <div class="box_image"><img src="/static/images/foto1.png" alt=""></div>
                                <div class="box_title trans_200"><a href="{{ url('/productos') }}">Ofertas</a></div>
                            </div>
                        </div>
    
                        <!-- Caja -->
                        <div class="col-lg-4 box_col">
                            <div class="box">
                                <div class="box_image"><img src="/static/images/foto2.jpg" alt=""></div>
                                <div class="box_title trans_200"><a href="{{ url('/productos') }}">Nuevos Productos</a></div>
                            </div>
                        </div>
    
                        <!-- Caja -->
                        <div class="col-lg-4 box_col">
                            <div class="box">
                                <div class="box_image"><img src="/static/images/foto3.jpg" alt=""></div>
                                <div class="box_title trans_200"><a href="{{ url('/productos') }}">Mejores Precios</a></div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Productos -->
    
        <div class="products">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="products_container grid">
                                
                                <!-- Producto 1 -->
                                <div class="product grid-item hot">
                                    <div class="product_inner">

                                        <div class="product_image">

                                            <a href="{{ url('/uploads/'.$p[0]->file_path.'/'.$p[0]->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                                <img src="{{ url('/uploads/'.$p[0]->file_path.'/t_'.$p[0]->imagen) }}" width="500"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                            </a>

                                        </div>

                                        <div class="product_content text-center">
                                            <div class="product_title">
                                        

                                                <a>{{ $p[0]->nombre }}</a>


                                            </div>
                                            <div class="product_price">
                                                
                                                <td>${{ $p[0]->precio }}</td>
                                            
                                            </div>

                                            <div class="product_button ml-auto mr-auto trans_200"><a href="{{route('cart-add', $p[0]->slug ) }}">añadir</a></div>
                                        </div>
                                    </div>	
                                </div>
    
                                <!-- Producto 2 -->
                                <div class="product grid-item hot">
                                    <div class="product_inner">

                                        <div class="product_image">

                                            <a href="{{ url('/uploads/'.$p[1]->file_path.'/'.$p[1]->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                                <img src="{{ url('/uploads/'.$p[1]->file_path.'/t_'.$p[1]->imagen) }}" width="500"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                            </a>

                                        </div>

                                        <div class="product_content text-center">
                                            <div class="product_title">
                                        

                                                <a>{{ $p[1]->nombre }}</a>


                                            </div>
                                            <div class="product_price">
                                                
                                                <td>${{ $p[1]->precio }}</td>
                                            
                                            </div>

                                            <div class="product_button ml-auto mr-auto trans_200"><a href="{{route('cart-add', $p[1]->slug ) }}">añadir</a></div>
                                        </div>
                                    </div>	
                                </div>

                                <!-- Producto 3 -->
                                <div class="product grid-item hot">
                                    <div class="product_inner">

                                        <div class="product_image">

                                            <a href="{{ url('/uploads/'.$p[2]->file_path.'/'.$p[2]->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                                <img src="{{ url('/uploads/'.$p[2]->file_path.'/t_'.$p[2]->imagen) }}" width="500"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                            </a>

                                        </div>

                                        <div class="product_content text-center">
                                            <div class="product_title">
                                        

                                                <a>{{ $p[2]->nombre }}</a>


                                            </div>
                                            <div class="product_price">
                                                
                                                <td>${{ $p[2]->precio }}</td>
                                            
                                            </div>

                                            <div class="product_button ml-auto mr-auto trans_200"><a href="{{route('cart-add', $p[2]->slug ) }}">añadir</a></div>
                                        </div>
                                    </div>	
                                </div>
                                    <!-- Producto 4 -->
                                <div class="product grid-item hot">
                                    <div class="product_inner">

                                        <div class="product_image">

                                            <a href="{{ url('/uploads/'.$p[3]->file_path.'/'.$p[3]->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                                <img src="{{ url('/uploads/'.$p[3]->file_path.'/t_'.$p[3]->imagen) }}" width="500"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                            </a>

                                        </div>

                                        <div class="product_content text-center">
                                            <div class="product_title">
                                        

                                                <a>{{ $p[3]->nombre }}</a>


                                            </div>
                                            <div class="product_price">
                                                
                                                <td>${{ $p[3]->precio }}</td>
                                            
                                            </div>

                                            <div class="product_button ml-auto mr-auto trans_200"><a href="{{route('cart-add', $p[3]->slug ) }}">añadir</a></div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    
        <!-- Footer -->
    
        <footer class="footer">
            <div class="footer_content">
                <div class="section_container">
                    <div class="container">
                        <div class="row">
                            
                            <!-- About -->
                            <div class="col-xxl-3 col-md-6 footer_col">
                                <div class="footer_about">
                                    <!-- Logo -->
                                    <div class="footer_logo">
                                        <a href="{{ url('/') }}"><div>Pet<span>Shop</span></div></a>
                                    </div>
                                    <div class="footer_about_text">
                                        <p>Nuestro amor por los animales nos llevó a iniciar este negocio para poder brindarles excelencia y calidad, y sobre todo, el mejor cuidado para nuestros compañeros</p>
                                    </div>
                                    <div class="cards">
                                        <ul class="d-flex flex-row align-items-center justify-content-start">
                                            <li><img src="/static/images/card_1.jpg" alt=""></li>
                                            <li><img src="/static/images/card_2.jpg" alt=""></li>
                                            <li><img src="/static/images/card_3.jpg" alt=""></li>
                                            <li><img src="/static/images/card_4.jpg" alt=""></li>
                                            <li><img src="/static/images/card_5.jpg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Contacto -->
                            <div class="col-xxl-3 col-md-6 footer_col">
                                <div class="footer_contact">
                                    <div class="footer_title">Contacto</div>
                                    <div class="footer_contact_list">
                                        <ul>
                                            <li class="d-flex flex-row align-items-start justify-content-start"><span>D.</span><div>Mitre 170, S2000 Rosario, Santa Fe</div></li>
                                            <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+54 34155555555555</div></li>
                                            <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>petshop@digitalhouse.com</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Social -->
            <div class="footer_social">
                <div class="section_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                    <!-- Instagram -->
                                    <a href="https://www.instagram.com/">
                                        <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                            <div class="footer_social_title">instagram</div>
                                        </div>
                                    </a>
    
                                    <!-- Pinterest -->
                                    <a href="https://ar.pinterest.com/">
                                        <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                            <div class="footer_social_title">pinterest</div>
                                        </div>
                                    </a>
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/">
                                        <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                            <div class="footer_social_title">facebook</div>
                                        </div>
                                    </a>
                                    <!-- Twitter -->
                                    <a href="https://twitter.com/?lang=es">
                                        <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                            <div class="footer_social_title">twitter</div>
                                        </div>
                                    </a>
                                    <!-- YouTube -->
                                    <a href="https://www.youtube.com/?gl=AR&hl=es-419">
                                        <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                            <div class="footer_social_title">youtube</div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>

@endsection