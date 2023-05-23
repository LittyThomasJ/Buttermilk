<?php
include("check_session.php");
//session_start();
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
$upd="update tb_login set status=4 where login_id=$id && role='farmer'";
$obj=new db();
$obj->execute($upd);


  header("location:viewfarmers.php");
?>