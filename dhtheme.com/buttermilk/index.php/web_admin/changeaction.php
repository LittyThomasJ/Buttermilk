<?php
//session_start();

include("../features/joomla-virtuemart/connection.php");
  include("check_session.php");
//echo $id;
if(isset($_POST['submit']))
 {
//include("connection.php");
 
//$name =$_FILES['file']['name'];
	
$namee=md5($_POST['CreatePassword']);
echo $namee;
$sql="update tb_login set password='$namee' where login_id=$lid";
$obj=new db();
$obj->execute($sql);
//$sql="update tb_product set cat_id='$id' where cat_id=$id";
//$obj=new db();
//$obj->execute($sql);

 }
 header("location:admprofile.php");
?>