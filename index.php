<?php 
session_start();
 if (isset($_SESSION['email'])){
echo'<script type="text/javascript">
alert("Bienvenido '. $_SESSION['email'].'");
</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet shop | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
				<a href="#"><div>pet<span>Shop</span></div></a>
			</div>

			<!-- Navegacion -->
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
<!-- Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Moneda -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">ARS</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Menu de monedas -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">USD</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">REAL</div></a></li>
					 </ul>

				</div>

				<!-- Carrito -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="carrito.php">
						<img src="images/bag.png" alt="">
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

			<!-- moneda -->
			<div class="info_currencies has_children">
				<div class="dropdown_text">ARS</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				<!-- Menu de monedas -->
				 <ul>
					 <li><a href="#"><div class="dropdown_text">USD</div></a></li>
					 <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 <li><a href="#"><div class="dropdown_text">REAL</div></a></li>
				 </ul>

			</div>

		</div>
<br>
<br>
<br>
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
	
	<!-- Barra lateral - VISTA PC -->

	<div class="sidebar">
		
		<!-- Informacion -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				
				<!-- moneda -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">ARS</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Menu de monedas -->
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
			<a href="#"><div>Pet<span>Shop</span></div></a>
		</div>

		<!-- Navegacion lateral -->
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

		<!-- Carrito -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="carrito.php">
				<img src="images/bag.png" alt="">
				<div class="cart_num">1</div>
			</a></div>
			<div class="cart_text">Carrito</div>
			<div class="cart_price">$2.500</div>
		</div>

	
	</div>

	<!-- Carrusel -->

	<div class="home">
		
		<!--Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/homef.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">50</div>
								<div class="home_discount_text">29/11</div>
							</div>
							<div class="home_title"> | blackFriday | </div>
							<div class="button button_1 home_button trans_200"><a href="productos.php">Compra Ahora!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home2.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">50</div>
								<div class="home_discount_text">29/11</div>
							</div>
							<div class="home_title"> | blackFriday | </div>
							<div class="button button_1 home_button trans_200"><a href="productos.php">Compra Ahora!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home3.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">50</div>
								<div class="home_discount_text">29/11</div>
							</div>
							<div class="home_title"> | blackFriday | </div>
							<div class="button button_1 home_button trans_200"><a href="productos.php">Compra Ahora!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

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
							<div class="box_image"><img src="images/foto1.png" alt=""></div>
							<div class="box_title trans_200"><a href="productos.php">ofertas</a></div>
						</div>
					</div>

					<!-- Caja -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/foto2.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="productos.php">nuevos productos</a></div>
						</div>
					</div>

					<!-- Caja -->
					<div class="col-lg-4 box_col">
						<div class="box">
                            <div class="box_image"><img src="images/foto3.jpg" alt=""></div>


                             <?php
                                
                                if (! empty($_SESSION['email'])&&$_SESSION['email']!='')
                                {
                                    ?>

                                    <div class="box_title trans_200"><a href="productos.php">Solo para miembros</a></div>
                                    

                                    <?php
                                }
                                else
                                {
                                    echo 'Necesitas ingresar para ver este contenido. <a href="login.php">Click Aqui</a> para logear.';
                                }

                                ?>


                           
                            
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
							
							<!-- Producto -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro1.jpg" alt="">
										<div class="product_tag">Mejor</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto1perro.php">CEPILLO PARA PERRO TOY FURMINATOR PELO LARGO</a></div>
										<div class="product_price">$1.500,00</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/pro2.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto.php">OLD PRINCE EQUILIBRIUM RAZA MED/GDE 15 KG</a></div>
										<div class="product_price">$ 1.716,00</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro3.jpg" alt="">
										<div class="product_tag">Oferta</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto.php">PRO PLAN ADULTOS X 15 KG + 3 KG BONUS</a></div>
										<div class="product_price">$ 3.000,00<span>$ 3.500,00</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro4.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto1roedor.php">HABITRAIL OVO  -  DWARF HAMSTER</a></div>
										<div class="product_price">3.438,96</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro5.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto1gato.php">JUGUETE PARA GATO GIGWI PET DROID 15 X 8 X 7.5 CM</a></div>
										<div class="product_price">2.040,00</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro6.jpg" alt="">
										<div class="product_tag">Nuevo</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto1varios.php">KIT DE ACUARIO DELUXE "NeoAqus" 24 L</a></div>
										<div class="product_price">2.440,00</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro7.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto.php">PRO PLAN GATO ADULTO URINARY CARE X 15 KG</a></div>
										<div class="product_price">$ 4.721,90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
									</div>
								</div>	
							</div>

							<!-- Producto -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/pro8.jpg" alt="">
										<div class="product_tag">Oferta</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="producto.php">CORREA EXT FLEXI NEW CLASSIC 8 M ROJA 12 KG</a></div>
										<div class="product_price">$ 1.450,10<span>$ 1.760,10</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="carrito.php">añadir</a></div>
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
									<a href="#"><div>Pet<span>Shop</span></div></a>
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