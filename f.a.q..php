<!DOCTYPE html>
<html lang="en">
<head>
<title> F.A.Q. | Pet Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<?php 
session_start();
?>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="index.php"><div>pet<span>shop</span></div></a>
			</div>

		<!-- Navigation -->
		<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="productos.php">Productos</a></li>
					<li><a href="login.php">Login</a></li> 
					<li><a href="f.a.q..php">F.A.Q.</a></li>
                    <li><a href="contacto.php">Contactanos!</a></li>
                    

                    <?php
                if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
                ?> 
                <li><a href="perfil.php">Mi Perfil</a></li>               
                <li><a href="logout.php">Cerrar Sesion</a></li>  
                <?php
                }
                ?>




				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Currency -->
				<div class="info_currencies has_children">
						<div class="dropdown_text">ARS</div>
						<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
	
						<!-- Currencies Dropdown Menu -->
						 <ul>
							 <li><a href="#"><div class="dropdown_text">USD</div></a></li>
							 <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
							 <li><a href="#"><div class="dropdown_text">REAL</div></a></li>
						 </ul>
	
					</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="carrito.php">
						<img src="images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			<!-- Currency -->
			<div class="info_currencies has_children">
					<div class="dropdown_text">ARS</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
	
					<!-- Currencies Dropdown Menu -->
					 <ul>
						 <li><a href="#"><div class="dropdown_text">USD</div></a></li>
						 <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
						 <li><a href="#"><div class="dropdown_text">REAL</div></a></li>
					 </ul>
	
				</div>

		</div>
		<div class="menu_search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Inicio</a></li>
				<li class="menu_mm"><a href="productos.php">Productos</a></li>
				<li class="menu_mm"><a href="login.php">Login</a></li>
				<li class="menu_mm"><a href="f.a.q..php">F.A.Q.</a></li>
                <li class="menu_mm"><a href="contacto.php">Contactanos!</a></li>
                
                <?php
                if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
                ?> 
                <li class="menu_mm"><a href="perfil.php">Mi Perfil</a></li>               
                <li class="menu_mm"><a href="logout.php">Cerrar Sesion</a></li>  
                <?php
                }
                ?>


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
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				<!-- Currency -->
				<div class="info_currencies has_children">
						<div class="dropdown_text">ARS</div>
						<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
	
						<!-- Currencies Dropdown Menu -->
						 <ul>
							 <li><a href="#"><div class="dropdown_text">USD</div></a></li>
							 <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
							 <li><a href="#"><div class="dropdown_text">REAL</div></a></li>
						 </ul>
	
					</div>

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
				<a href="index.php"><div>Pet<span>Shop</span></div></a>
			</div>
	
			<!-- Sidebar Navigation -->
			<nav class="sidebar_nav">
			<ul>
				<li><a href="index.php">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="productos.php">Productos<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>				
				<li><a href="login.php">Login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="f.a.q..php">F.A.Q.<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="contacto.php">Contactanos!<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <?php
                if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
                ?>             
                <li><a href="logout.php">Cerrar Sesion<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="perfil.php">Mi Perfil<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>     
                <?php
                }
                ?>

			</ul>
		</nav>
	
			<!-- Cart -->
			<div class="cart d-flex flex-row align-items-center justify-content-start">
				<div class="cart_icon"><a href="carrito.php">
					<img src="images/bag.png" alt="">
					<div class="cart_num">2</div>
				</a></div>
				<div class="cart_text">Carrito</div>
				<div class="cart_price">$2.500</div>
			</div>
		</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Preguntas Frecuentes</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="f.a.q..php">F.A.Q.</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- preguntas frecuentes -->

	<div class="blog">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								
								<div class="blog_post_content">
									
									<div class="blog_post_title"><li>Como comprar?</li></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
									<div class="blog_post_text">
										<p>1- Elige el producto que deseas comprar.Haz clic en el botón de "Agregar".</p>
										<p>2- Se agregará el producto a tu carrito</p>
										<p>3- Puedes seguir agregando otros productos al carrito o sino haz clic en "Procesar pedido".</p>
										<p>4- Completa tus datos de contacto y haz clic en "Continuar".</p>
										<p>5- Ingresa la dirección a donde deseas recibir el producto. Luego haz clic en "Continuar".</p>
										<p>6- Selecciona el método de envío que desees y haz clic en "Continuar". Los envíos los realizo a través de MercadoEnvíos. El tiempo de entrega que figura en esta opción cuenta desde que despachamos el producto.</p>
										<p>7- Elige el medio de pago.También puedes seleccionar la opción de "Acordar método de pago". Una vez que hayas elegido el medio de pago, haz clic en "Finalizar".</p>
										<p>8- Finalmente en la página de Confirmación de compra puedes revisar toda la información de la compra. Luego haz clic en "Continuar".</p>
										<p>9- Ahí serás redirigido a otra pantalla para que completes los datos sobre la forma de pago elegida. Después de confirmar la compra recibirás un correo de nuestra parte, ese no será un comprobante de pago.</p>
										<p>10- Una vez acreditado el pago, haremos el envío correspondiente de los productos que hayas comprado.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
								<!-- Blog Post -->
								<div class="blog_post">
									<div class="blog_post_content">
										<div class="blog_post_title"><li>¿Qué formas de pago aceptan?</li></div>
										<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_text">
											<p>Tarjeta de crédito, tarjeta de debito, transferencia bancaria,  Rapipago, Pagofácil o Cobro Espress o en un cajero Banelco o Link o pagar con dinero en cuenta de MercadoPago.</p>
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
									<div class="blog_post_title"><li>Envíos</li></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
									<div class="blog_post_text">
										<p>Hacemos envíos a todo el país a través de Correo Argentino, Mercado Envios, el costo depende de la localidad.</p>
										<br>
										
										<a href="contactanos.php">Hacenos tu consulta</a> 	
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
									<a href="index.php"><div>pet<span>shop</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Nuestro amor por los animales nos llevó a iniciar este negocio para poder brindarles excelencia y calidad, y sobre todo, el mejor cuidado para nuestros compañeros</p>
								</div>
								<div class="cards">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><img src="images/card_1.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_2.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_3.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_4.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_5.jpg" alt=""></a></li>
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

</div>		
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap-4.1.3/popper.js"></script>
	<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/Isotope/fitcolumns.js"></script>
	<script src="js/custom.js"></script>
	</body>
	</html>