<?php
//session_start();
include("check_session.php");
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
//$upd="delete from tb_product where product_id=$id";
$upd="update tb_product set status=0 where product_id=$id";
$obj=new db();
$obj->execute($upd);


  header("location:viewprod.php");
?>