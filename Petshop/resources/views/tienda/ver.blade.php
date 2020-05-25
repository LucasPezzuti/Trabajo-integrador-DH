@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
<link rel="stylesheet" type="text/css" href="/static/css/tienda/product.css">
<link rel="stylesheet" type="text/css" href="/static/css/tienda/product_responsive.css">
	<!-- Products -->

	<div class="product">

		
		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
										<div class="product_image_1 product_image">

											<a href="{{ url('/uploads/'.$producto[0]->file_path.'/'.$producto[0]->imagen) }}" data-fancybox="gallery"> {{-- le paso como link la misma imagen pero sin el prefijo t_ para q al darle click abra la imagen grande --}}
                                                <img src="{{ url('/uploads/'.$producto[0]->file_path.'/t_'.$producto[0]->imagen) }}" width="700"  alt="product"></td> {{-- aca hago uso del campo file_path de la tabla donde se guarda el path de la imagen --}}{{--  t_ es para llamar a la miniatura --}}
                                            </a>

										</div>
										
                                    </div>
                                   
									
									
								</div>
                            </div>
                            
							<div class="product_sidebar order-lg-2 order-1">
								<form action="#" id="product_form" class="product_form">
                                    <div class="product_name" style="padding-bottom:20px">{{ $producto[0]->nombre }}</div>

                                    @php
                                    if($producto[0]->endescuento == 0)
                                    $producto[0]->endescuento = 'No';
                                    else
                                    $producto[0]->endescuento = 'Si';
                                    @endphp

                                    <div class="">¿En descuento?: {{ $producto[0]->endescuento }}</div>
                                    <div class="">Descuento: {{ $producto[0]->descuento }}%</div>
                                    <div class="product_price">${{ $producto[0]->precio }}</div>
                                    <div class="">

                                        Descripción:

                                        @php
                                        $cont = $producto[0]->contenido;
                                        echo strip_tags(html_entity_decode($cont));
                                        @endphp
                                        
                                    </div>
									<button class="cart_button trans_200">añadir</button>
								</form>
								
                            </div>
                        
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
@endsection