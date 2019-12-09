<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro | Pet shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">

<style type="text/css">
<?php
if(isset($error))
{
  echo $error;
 ?>
 input:focus
 {
  border:solid red 1px;
 }
 <?php
}
?>
</style>

<script src="https://kit.fontawesome.com/0d91f8e901.js" crossorigin="anonymous"></script>
</head>
<body>



<?php
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}



//filtra por post
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
  $nombre = filtrado($_POST["nombre"]);
  $password = filtrado($_POST["password"]);
  $apellido = filtrado($_POST["apellido"]);
  $pais = filtrado($_POST["pais"]);
  $ciudad = filtrado($_POST["ciudad"]);
  $email = filtrado($_POST["email"]);
  $direccion = filtrado($_POST["direccion"]);
}


?>


<?php

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    // El nombre y contraseña son campos obligatorios
    if(empty($_POST["nombre"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    // El email es obligatorio y ha de tener formato adecuado
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    if(empty($_POST["apellido"])){
      $errores[] = "El apellido es requerido";
    }
    if(empty($_POST["pais"])){
      $errores[] = "El pais es requerido";
    }
    if(empty($_POST["ciudad"])){
      $errores[] = "La ciudad es requerida";
    }
    if(empty($_POST["direccion"])){
      $errores[] = "La direccion es requerida";
	}
	if($_FILES["imagen"]["error"] != 0){
		$errores[]= "hubo error al cargar la imagen";
	}else{
		$ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
		if($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
			$errores[] = "La extension no es correcta";
		}
	}

}

?>

<ul> <!-- LISTO LOS ERRORES -->
<?php

if(isset($_POST['submit'])){
	$db= file_get_contents('usuarios.json');
	$usuarios = json_decode($db,true); 
	$mail =$_POST["email"];
	$chequeomail=array_search($mail ,array_column($usuarios,"email"));
	if ($chequeomail){
		$errores[] = "El email ya existe";
		}
	}
	
if(isset($errores)&&isset($_POST['submit'])){
    foreach ($errores as $error){
        //echo "<li> $error </li>";
        //SI HAY ERROES LOS MUESTRO EN UN ALERT
        echo'<script type="text/javascript">
        alert("Tienes el siguiente error :'. $error.'");
        </script>';
    }
	}
	else{
	// Si el array $errores está vacío y existen datos en $_POST, se aceptan los datos y se cargan en el JSON

	if(empty($errores)&&isset($_POST['submit'])){
		$db= file_get_contents('usuarios.json');
		$usuarios = json_decode($db,true); 
		$usuarios[]= [
			"nombre"=>$_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"email" => $_POST['email'],
			"direccion"=>$_POST['direccion'],
			"ciudad"=>$_POST['ciudad'],
			"pais"=>$_POST['pais'],
			//"password" => password_hash($_POST['password'],PASSWORD_DEFAULT)
			"password" => md5($_POST['password'])
			
			
		];
		
		
		$db= json_encode($usuarios);
		file_put_contents('usuarios.json',$db);


		$url="login.php";
		header("Location:$url");

	}
	if($_FILES){
		$random=rand(1,999999);
		move_uploaded_file($_FILES["imagen"]["tmp_name"], "archivos/imagen.".$random.".".$ext);

	}
}

?>
</ul>





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

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="productos.html">Productos</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="perfil.html">Mi Perfil</a></li> <!-- Esto va a ocultarse cuando la sesion no este iniciada -->
					<li><a href="f.a.q..html">F.A.Q.</a></li>
					<li><a href="contacto.html">Contactanos!</a></li>
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
					<div class="cart_icon"><a href="cart.html">
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
				<li class="menu_mm"><a href="index.html">Inicio</a></li>
				<li class="menu_mm"><a href="productos.html">Productos</a></li>
				<li class="menu_mm"><a href="perfil.html">Mi Perfil</a></li> <!-- Esto va a ocultarse cuando la sesion no este iniciada -->
				<li class="menu_mm"><a href="login.html">Login</a></li>
				<li class="menu_mm"><a href="f.a.q..html">F.A.Q.</a></li>
				<li class="menu_mm"><a href="contacto.html">Contactanos!</a></li>
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
			<a href="#"><div>Pet<span>Shop</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="index.html">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="productos.html">Productos<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="perfil.html">Mi Perfil<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="login.html">Login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="f.a.q..html">F.A.Q.<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="contacto.html">Contactanos!<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">Carrito</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">

            <div class="card bg-dark text-white">
                    <img src="./images/portada2.jpg" class="card-img" alt="...">
                    
                  </div>



	</div>

	<!-- Checkout -->

  <div class="
  checkout">
  
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
									<div class="home_title"> Registrar<i class="fas fa-street-view"></i></div>
								<br>
                                    
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo ((isset($_POST["email"])) ? (htmlspecialchars($_POST["email"], ENT_QUOTES)) : ("")); ?>">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label fo1r="inputPassword4">Contraseña</label>
                                            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                                          </div>
                                          
                                        </div>
                                        <div class="row">
                                                <div class="col">
                                                  <h5>Nombre</h5>  
                                                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo ((isset($_POST["nombre"])) ? (htmlspecialchars($_POST["nombre"], ENT_QUOTES)) : ("")); ?>">
                                                </div>
                                                <div class="col">
                                                    <h5>Apellido</h5>
                                                  <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo ((isset($_POST["apellido"])) ? (htmlspecialchars($_POST["apellido"], ENT_QUOTES)) : ("")); ?>">
                                                </div>
                                              </div>
                                                <br>

                                        <div class="form-group">
                                          <label for="inputAddress2">Direccion</label>
                                          <input type="text" class="form-control" name="direccion" id="inputAddress2" placeholder="direccion" value="<?php echo ((isset($_POST["direccion"])) ? (htmlspecialchars($_POST["direccion"], ENT_QUOTES)) : ("")); ?>">
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCity">Cuidad</label>
                                            <input type="text" class="form-control" name="ciudad" id="inputCity" value="<?php echo ((isset($_POST["ciudad"])) ? (htmlspecialchars($_POST["ciudad"], ENT_QUOTES)) : ("")); ?>">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Pais</label>
                                            <input type="text" class="form-control" name="pais" id="inputState" value="<?php echo ((isset($_POST["pais"])) ? (htmlspecialchars($_POST["pais"], ENT_QUOTES)) : ("")); ?>">
                                      
										  </div>
										 <div>
											
										 <label for="">Foto de perfil:</label>
											<input type="file" name="imagen">
											

										 </div>
										  

										</div>
										<br>
                                       
                                        <button type="submit" name="submit" value="Enviar" class="btn btn-primary">Registrar</button> 

                                      </form>



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
									<a href="#"><div>pet<span>shop</span></div></a>
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
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="footer_social_title">instagram</div>
									</div>
								</a>
								<!-- Google + -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
										<div class="footer_social_title">google +</div>
									</div>
								</a>
								<!-- Pinterest -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
										<div class="footer_social_title">pinterest</div>
									</div>
								</a>
								<!-- Facebook -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="footer_social_title">facebook</div>
									</div>
								</a>
								<!-- Twitter -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="footer_social_title">twitter</div>
									</div>
								</a>
								<!-- YouTube -->
								<a href="#">
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