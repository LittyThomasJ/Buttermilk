<?php
session_start();
//$lid=$_SESSION['lid'];
//include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
$id=$_GET['id'];
echo $id;
if($id>0)
{

	
$namee=$_POST['category'];
echo $namee;
$sql="update tb_package set package='$namee' where pack_id=$id";
$obj=new db();
$obj->execute($sql);
//$sql="update tb_product set cat_id='$id' where cat_id=$id";
//$obj=new db();
//$obj->execute($sql);
 }
 header("location:addpackagetype.php");
?>