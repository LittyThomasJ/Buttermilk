<?php
//session_start();
//session_destroy();
session_start();
if(isset($_SESSION['lid'])&& $_SESSION['lid']!="")
{
  $_SESSION['lid']="";
  unset($_SESSION['lid']);
  session_destroy();
  header("location: index.php/shop.php");
  
}
else
{
   header("location: index.php/shop.php");
}
//header("location:../shop.php");

?>