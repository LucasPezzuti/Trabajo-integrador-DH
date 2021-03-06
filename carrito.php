<!DOCTYPE html>
<html lang="en">
<head>
<title> Carrito | Pet shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
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
					<a href="index.php"><div>pet<span>Shop</span></div></a>
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
			<div class="menu_social">
				<ul>
					<li><a href="https://ar.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/product_background.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Carrito</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="carrito.php">Carrito</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->

	<div class="cart_section">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
									<li>Producto</li>
									<li>Precio</li>
									<li>Cantidad</li>
									<li>Total</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
											<div><div class="product_image"><img src="images/pro5.jpg" alt=""></div></div>
											<div class="product_name"><a href="producto1gato.php">JUGUETE PARA GATO GIGWI PET DROID 15 X 8 X 7.5 CM</a></div>
										</div>
										<div class="product_price text-lg-center product_text"><span>Precio: </span>$2.040,00</div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
												<span class="product_text product_num">1</span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total text-lg-center product_text"><span>Total: </span>$2.040,00</div>
									</li>
								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_continue trans_200"><a href="productos.php">Continuar compra</a></div>
									<div class="button button_clear trans_200"><a href="#">limpiar carrito</a></div>
									<div class="button button_update trans_200"><a href="#">Finalizar compra</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section_container cart_extra_container">
			<div class="container">
				<div class="row">

					<!-- Shipping & Delivery -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_1">
							<div class="cart_extra_content cart_extra_coupon">
								<div class="cart_extra_title">Cupon de descuento</div>
								<div class="coupon_form_container">
									<form action="#" id="coupon_form" class="coupon_form">
										<input type="text" class="coupon_input" required="required">
										<button class="coupon_button">Aplicar codigo</button>
									</form>
								</div>
								<div class="shipping">
									<div class="cart_extra_title">Metodo de envio</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Envio express</span>
											</label>
											<div class="shipping_price ml-auto">$350,00</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Envio estandar</span>
											</label>
											<div class="shipping_price ml-auto">$170,00</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Retiro en sucursal</span>
											</label>
											<div class="shipping_price ml-auto">Sin costo</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Compra total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$2.040,00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Envio</div>
										<div class="cart_extra_total_value ml-auto">$0,00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$2.040,00</div>
									</li>
								</ul>
								<div class="checkout_button trans_200"><a href="#">Pagar</a></div>
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
	
	
							<!-- Contact -->
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