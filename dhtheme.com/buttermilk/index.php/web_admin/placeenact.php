<?php
include("check_session.php");
session_start();
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
echo "<script type='text/javascript'>alert('really u want to delete');</script>";
//$upd="delete from tb_category where cat_id=$id";
$upd="update tb_places set status='1' where place_id=$id";
$obj=new db();
$obj->execute($upd);
//$up="delete from tb_product where cat_id=$id";
//$up="update tb_product set status='1' where cat_id=$id";
//$obj=new db();
//$obj->execute($up);

  header("location:enableplaces.php");
?>