<?php
session_start(); 
if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
session_destroy();
header ("Location: index.php");
}
else{ header ("Location: index.php");
exit;
}