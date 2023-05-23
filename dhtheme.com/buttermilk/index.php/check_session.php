<?php 
session_start();
if(isset($_SESSION['lid'])&& $_SESSION['lid']!="")
{
	$lid=$_SESSION['lid'];
	
}
else
{
   header("location: shop.php");
}

$inactive=1000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location: shop.php");	
	}	
}
$_SESSION['timeout']=time();
?>