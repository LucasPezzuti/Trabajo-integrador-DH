<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- archivo css para la carpeta admin --}}
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
    {{-- fuente roboto de google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- font awesome iconos --}}
    <script src="https://kit.fontawesome.com/cf91392eed.js" crossorigin="anonymous"></script>
    {{-- jquery para tooltips --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- fancybox para imagenes --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    {{-- <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css"> --}}
    {{-- <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" type="text/css" href="/static/css/tienda/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/static/css/tienda/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/static/css/tienda/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/static/css/tienda/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/static/css/tienda/responsive.css">


    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- ckeditor es para visualizar editor de textos, lo baje desde su pagina y lo pegue en la carpeta public/static/libs --}}
    <script src="{{ url('/static/libs/ckeditor/ckeditor.js') }}"></script>
    {{-- carpeta y archivo creados para guardar funciones, necesario para llamar la funcion de ckeditor  --}}
    <script src="{{ url('/static/js/admin.js') }}"></script>

{{--     <script>
        //necesita esto jquery para iniciar
        $(document).ready(function()){
            $('[data-toggle="tooltip"]').tooltip()
        }
    </script> --}}

    <title>@yield('title') DH Petshop</title>
</head>
<body>
    
    <div class="super_container">

        <!-- Header -->
    
        <header class="header">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                
                <!-- Hamburger -->
                <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>
    
                <!-- Logo -->
                
                
                <div class="header_logo">
                
                    
                    
                    <br>
                    <a href="{{ url('/home') }}"><div>pet<span>Shop</span></div></a>
                </div>
    
                <!-- Navegacion -->
                <nav class="header_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
            
                    @php
    
                    //if (Session::get('_token')):
                    if(isset(Auth::user()->rol)):
                    @endphp
                                    
                        
                        <div class="user">
                            <span class="subtitle">Hola:</span>
                
                            <div class="name">
                                {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}
                            <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                
                            <div class="email">{{ Auth::user()->email }}
                            </div>
                        </div>
                        <li><a href="{{ url('/tienda/perfil') }}">Mi Perfil</a></li>   
                    @php   
                    endif;
    
                    @endphp        
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/productos') }}">Productos</a></li>
                        <li><a href="{{ url('../login') }}">Login</a></li> 
                        <li><a href="{{ url('/faq') }}">F.A.Q.</a></li>
                        <li><a href="{{ url('/contacto') }}">Contactanos!</a></li>
                    </ul>
                </nav>
                 <!-- Extra -->
                <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">
    
    
                    <!-- Carrito -->
                    <div class="cart d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_icon"><a href="carrito.php">
                            <img src="/static/images/bag.png" alt="">
                            <div class="cart_num">1</div>
                        </a></div>
                    </div>
    
                </div>
    
            </div>
        </header>
    
        <!-- Menu VISTA MOBILE, VERTICAL -->
     
        <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
            <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
            <div class="menu_top d-flex flex-row align-items-center justify-content-start">
    

    
            </div>
    <br>
    <br>
    <br>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    
                    @php
    
                    //if (Session::get('_token')):
                    if(isset(Auth::user()->rol)):
                    @endphp              
                        
                        <div class="user">
                            <span class="subtitle">Hola:</span>
                
                            <div class="name">
                                {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}
                            <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                
                            <div class="email">{{ Auth::user()->email }}
                            </div>
                        </div>
                        <li><a href="{{ url('/tienda/perfil') }}">Mi Perfil</a></li> 

                    @php   
                    endif;
                    @endphp 
    
                        <li class="menu_mm"><a href="{{ url('/') }}">Inicio</a></li>
                        <li class="menu_mm"><a href="{{ url('/productos') }}">Productos</a></li>
                        <li class="menu_mm"><a href="{{ url('../login') }}">Login</a></li>
                        <li class="menu_mm"><a href="{{ url('/faq') }}">F.A.Q.</a></li>
                        <li class="menu_mm"><a href="{{ url('/contacto') }}">Contactanos!</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Barra lateral - VISTA PC -->
    
        <div class="sidebar">
    
            <!-- Informacion -->
            <div class="info">	<?php
                    if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
                    ?> 
                    
                    <div class="float-left">
                    <div class="header_logo">
                    Bienvenido<span> <?php echo $_SESSION['email'] ?> </span>
                    <br>
                    </div>
                    </div><br>
                
                    <?php
                    }
                    ?>
                
        
                <div class="info_content d-flex flex-row align-items-center justify-content-start">
    
                    

    
                </div>
            </div>
    
            <!-- Logo -->
        
            
            
            <div class="sidebar_logo">
        
    
    
        
    
                <a href="{{ url('/') }}"><div>Pet<span>Shop</span></div></a>
            </div>
    
            <!-- Navegacion lateral -->
            <nav class="sidebar_nav">
                <ul>
                  
                    @php
    
                    //if (Session::get('_token')):
                    if(isset(Auth::user()->rol)):
                    @endphp

                        <div class="user">
                            <span class="subtitle">Hola:</span>
                
                            <div class="name">
                                {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}
                            <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                
                            <div class="email">{{ Auth::user()->email }}
                            </div>
                        </div>
                    <li><a href="{{ url('/tienda/perfil') }}">Mi Perfil</a></li>   
                    @php   
                    endif;
    
                    @endphp 
                      <li><a href="{{ url('/') }}">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      <li><a href="{{ url('/productos') }}">Productos<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>				
                      <li><a href="{{ url('../login') }}">Login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      <li><a href="{{ url('/faq') }}">F.A.Q.<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      <li><a href="{{ url('/contacto') }}">Contactanos!<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
    
            <!-- Carrito -->
            <div class="cart d-flex flex-row align-items-center justify-content-start">
                <div class="cart_icon"><a href="{{ url('/tienda/carrito') }}">
                    <img src="/static/images/bag.png" alt="">
                    <div class="cart_num">1</div>
                </a></div>
                <div class="cart_text">Carrito</div>
            </div>
    
        
        </div>
        
        @yield('content')
    
    
    {{-- <script src="js/jquery-3.2.1.min.js"></script> --}}
    <script src="static/css/tienda/bootstrap-4.1.3/popper.js"></script>
    <script src="static/css/tienda/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script src="static/css/tienda/greensock/TweenMax.min.js"></script>
    <script src="static/css/tienda/greensock/TimelineMax.min.js"></script>
    <script src="static/css/tienda/scrollmagic/ScrollMagic.min.js"></script>
    <script src="static/css/tienda/greensock/animation.gsap.min.js"></script>
    <script src="static/css/tienda/greensock/ScrollToPlugin.min.js"></script>
    <script src="static/css/tienda/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="static/css/tienda/easing/easing.js"></script>
    <script src="static/css/tienda/parallax-js-master/parallax.min.js"></script>
    <script src="static/css/tienda/Isotope/isotope.pkgd.min.js"></script>
    <script src="static/css/tienda/Isotope/fitcolumns.js"></script>
    <script src="static/js/custom.js"></script>

</body>
</html>