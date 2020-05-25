@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
	<!-- preguntas frecuentes -->

	<div class="blog" style="display: inline-block;padding: 50px; border-radius: 4px; text-decoration: none;">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								
								<div class="blog_post_content">
									
									<div class="blog_post_title" style="font-size: 25px; padding-bottom:20px"><li>Como comprar?</li></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
									<div class="blog_post_text">
										<p style="font-size: 15px">1- Elige el producto que deseas comprar.Haz clic en el botón de "Agregar".</p>
										<p style="font-size: 15px">2- Se agregará el producto a tu carrito</p>
										<p style="font-size: 15px">3- Puedes seguir agregando otros productos al carrito o sino haz clic en "Procesar pedido".</p>
										<p style="font-size: 15px">4- Completa tus datos de contacto y haz clic en "Continuar".</p>
										<p style="font-size: 15px">5- Ingresa la dirección a donde deseas recibir el producto. Luego haz clic en "Continuar".</p>
										<p style="font-size: 15px">6- Selecciona el método de envío que desees y haz clic en "Continuar". Los envíos los realizo a través de MercadoEnvíos. El tiempo de entrega que figura en esta opción cuenta desde que despachamos el producto.</p>
										<p style="font-size: 15px">7- Elige el medio de pago.También puedes seleccionar la opción de "Acordar método de pago". Una vez que hayas elegido el medio de pago, haz clic en "Finalizar".</p>
										<p style="font-size: 15px">8- Finalmente en la página de Confirmación de compra puedes revisar toda la información de la compra. Luego haz clic en "Continuar".</p>
										<p style="font-size: 15px">9- Ahí serás redirigido a otra pantalla para que completes los datos sobre la forma de pago elegida. Después de confirmar la compra recibirás un correo de nuestra parte, ese no será un comprobante de pago.</p>
										<p style="font-size: 15px; padding-bottom:20px">10- Una vez acreditado el pago, haremos el envío correspondiente de los productos que hayas comprado.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
								<!-- Blog Post -->
								<div class="blog_post">
									<div class="blog_post_content">
										<div class="blog_post_title" style="font-size: 25px; padding-bottom:20px"><li>¿Qué formas de pago aceptan?</li></div>
										<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_text">
											<p style="font-size: 15px; padding-bottom:20px">Tarjeta de crédito, tarjeta de debito, transferencia bancaria,  Rapipago, Pagofácil o Cobro Espress o en un cajero Banelco o Link o pagar con dinero en cuenta de MercadoPago.</p>
										</div>
									</div>
								</div>
							</div>
	
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_content">
									<div class="blog_post_title" style="font-size: 25px; padding-bottom:20px"><li>Envíos</li></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
									<div class="blog_post_text">
										<p style="font-size: 15px">Hacemos envíos a todo el país a través de Correo Argentino, Mercado Envios, el costo depende de la localidad.</p>
										<br>
										
										<a href="{{ url('/contacto') }}">Hacenos tu consulta</a> 	
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
		
			</div>
		</div>
	</div>
    
@endsection