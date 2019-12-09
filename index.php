<?php 
session_start();

if (isset($_SESSION['email'])){
echo'<script type="text/javascript">
alert("Bienvenido '. $_SESSION['email'].'");
</script>';
}

include_once("index.html"); ?>