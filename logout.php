 <?php
 
/* session_start(); 
if (! empty($_SESSION['email'])&&$_SESSION['email']!=''){
session_destroy();
header ("Location: index.php");
}
else{ header ("Location: index.php");
exit;
}  */

include('config.php');
$session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{
$url=BASE_URL.'index.php';
header("Location: $url");
//echo "";
}
?>