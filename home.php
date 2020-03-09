<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
$_SESSION["email"] = 1;
 
 
/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}
 
 
/**
 * Print out something that only logged in users can see.
 */
 
header("Location:index.php");

?>