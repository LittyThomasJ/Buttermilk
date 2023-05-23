<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
$id=$_GET['id'];
//echo $id;
 	$obj=new db();

$sel="SELECT * FROM tb_addcart WHERE product_id=$id && status='0' && login_id=$lid";
	$obj=new db();
	$select=$obj->execute($sel);
	if(mysqli_num_rows($select)>0)
   {
   	echo "<script type='text/javascript'>alert('already added');</script>";
	
   }
   else
   {

$sqlll="Insert into tb_addcart(product_id,status,login_id) values('$id','0','$lid')";
//$objj=new db();
$obj->execute($sqlll);
 }
 header("location:Details.php?id= $id");
 ?>