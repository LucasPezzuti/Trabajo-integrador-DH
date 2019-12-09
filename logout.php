<?php
session_start(); 
if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
session_destroy();
echo 'Cerraste tu sesion. <a href="index.php">Volver</a>';
}
else{ header ("Location: index.php");
exit;
}