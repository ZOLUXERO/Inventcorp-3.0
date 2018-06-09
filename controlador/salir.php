<?php 
session_start();
if (!empty($_SESSION["session"]))
{
session_destroy(); 
echo $_SESSION["session"];	
header("Location:../vista/html/seguridaddb.php"); 
}

?>