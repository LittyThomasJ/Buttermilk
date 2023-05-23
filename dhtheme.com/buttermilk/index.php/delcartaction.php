<?php
//include("check_session.php");
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//session_start();
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
$upd="update tb_addcart set status=2 where product_id=$id && status=0";
$obj=new db();
$obj->execute($upd);
header("location:viewcart.php");
?>