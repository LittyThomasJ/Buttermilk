<?php
//include("check_session.php");
session_start();
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
$upd="update tb_login set status=1 where login_id=$id";
$obj=new db();
$obj->execute($upd);
header("location:encust.php");
?>