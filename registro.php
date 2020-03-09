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

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    // El nombre y contraseña son campos obligatorios
    if(empty($_POST["nombre"])){
        $errores['nombre'] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
        $errores['password'] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    // El email es obligatorio y ha de tener formato adecuado
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores['email'] = "No se ha indicado email o el formato no es correcto";
    }
    if(empty($_POST["apellido"])){
      $errores['apellido'] = "El apellido es requerido";
    }
    if(empty($_POST["pais"])){
      $errores['pais'] = "El pais es requerido";
    }
    if(empty($_POST["ciudad"])){
      $errores['ciudad'] = "La ciudad es requerida";
    }
    if(empty($_POST["direccion"])){
      $errores['direccion'] = "La direccion es requerida";
	}
	if($_FILES["imagen"]["error"] != 0){
		$errores['imagen']= "hubo error al cargar la imagen";
	}else{
		$ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
		if($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
			$errores['imagen'] = "La extension no es correcta";
		}
	}

}

//register.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connection.php';


//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $username = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(email) AS num FROM clientes WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':email', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if($row['num'] > 0){
        die('That username already exists!');
    }
    
    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
    
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO clientes (email, password) VALUES (:email, :password)";
    $stmt = $pdo->prepare($sql);
    
    //Bind our variables.
    $stmt->bindValue(':email', $username);
    $stmt->bindValue(':password', $passwordHash);

    //Execute the statement and insert the new account.
    $result = $stmt->execute();
    
    //If the signup process is successful.
    if($result){
        //What you do here is up to you!
        header("Location:login.php");
		exit;
    }
    
}



?><!DOCTYPE html>
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



<script src="https://kit.fontawesome.com/0d91f8e901.js" crossorigin="anonymous"></script>
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
                                            <input type="email" id="email" name="email" class="form-control <?php echo isset($errores['email']) ? 'is-invalid' :''?>" id="inputEmail4" placeholder="Email" value="<?php echo ((isset($_POST["email"])) ? (htmlspecialchars($_POST["email"], ENT_QUOTES)) : ("")); ?>">
										<?php if(isset($errores['email'])):?>
											<div class="invalid-feedback"><?= $errores['email'] ?></div>
											<?php	endif; ?>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label fo1r="inputPassword4">Contraseña</label>
                                            <input type="password" id="password" name="password" class="form-control <?php echo isset($errores['password']) ? 'is-invalid' :''?>" id="inputPassword4" placeholder="Contraseña">
											<?php if(isset($errores['password'])):?>
											<div class="invalid-feedback"><?= $errores['password'] ?></div>
											<?php	endif; ?>
							 				</div>
                                          </div>
                                        <div class="row">
                                                <div class="col">
                                                  <h5>Nombre</h5>  
                                                  <input type="text" name="nombre" class="form-control <?php echo isset($errores['nombre']) ? 'is-invalid' :''?>" placeholder="Nombre" value="<?php echo ((isset($_POST["nombre"])) ? (htmlspecialchars($_POST["nombre"], ENT_QUOTES)) : ("")); ?>">
												  <?php if(isset($errores['nombre'])):?>
													<div class="invalid-feedback"><?= $errores['nombre'] ?></div>
													<?php	endif; ?>
							 							
											   
											   
											    </div>
                                                <div class="col">
                                                    <h5>Apellido</h5>
                                                  <input type="text" name="apellido" class="form-control <?php echo isset($errores['apellido']) ? 'is-invalid' :''?>"  placeholder="Apellido" value="<?php echo ((isset($_POST["apellido"])) ? (htmlspecialchars($_POST["apellido"], ENT_QUOTES)) : ("")); ?>">
												  <?php if(isset($errores['apellido'])):?>
													<div class="invalid-feedback"><?= $errores['apellido'] ?></div>
													<?php	endif; ?>
												</div>
                                              </div>
                                                <br>

                                        <div class="form-group">
                                          <label for="inputAddress2">Direccion</label>
                                          <input type="text" class="form-control <?php echo isset($errores['direccion']) ? 'is-invalid' :''?>"  name="direccion" id="inputAddress2" placeholder="direccion" value="<?php echo ((isset($_POST["direccion"])) ? (htmlspecialchars($_POST["direccion"], ENT_QUOTES)) : ("")); ?>">
										  <?php if(isset($errores['direccion'])):?>
													<div class="invalid-feedback"><?= $errores['direccion'] ?></div>
													<?php	endif; ?>
							 							
											   
										</div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCity">Cuidad</label>
                                            <input type="text" class="form-control <?php echo isset($errores['ciudad']) ? 'is-invalid' :''?>" name="ciudad" id="inputCity" value="<?php echo ((isset($_POST["ciudad"])) ? (htmlspecialchars($_POST["ciudad"], ENT_QUOTES)) : ("")); ?>">
											<?php if(isset($errores['ciudad'])):?>
													<div class="invalid-feedback"><?= $errores['ciudad'] ?></div>
													<?php	endif; ?>
										  </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Pais</label>
                                            <input type="text" class="form-control <?php echo isset($errores['pais']) ? 'is-invalid' :''?>" name="pais" id="inputState" value="<?php echo ((isset($_POST["pais"])) ? (htmlspecialchars($_POST["pais"], ENT_QUOTES)) : ("")); ?>">
											<?php if(isset($errores['pais'])):?>
													<div class="invalid-feedback"><?= $errores['pais'] ?></div>
													<?php	endif; ?>

										  </div>
										 <div>
											
										 <label for="">Foto de perfil:</label>
											<input type="file" name="imagen" >
											

										 </div>
										  

										</div>
										<br>
                                       
                                        <button type="submit" name="register" value="Register" class="btn btn-primary">Registrar</button> 

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
									<a href="indexphp"><div>pet<span>shop</span></div></a>
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