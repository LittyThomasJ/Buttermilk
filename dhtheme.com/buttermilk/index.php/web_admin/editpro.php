<?php
//session_start();
//$lid=$_SESSION['lid'];
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
$id=$_GET['id'];
//echo $id;
if($id>0)
{
//include("connection.php");
 
//$name =$_FILES['file']['name'];
	
$pro=$_POST['product'];
//echo $pro;
$des=$_POST['desc'];
//echo $des;
$name =$_FILES['picture']['name'];
echo $name;
$temp_name =$_FILES['picture']['tmp_name'];
move_uploaded_file($temp_name,'upload/'.$name);
$namee =$_FILES['picture2']['name'];
echo $namee;
$temp_namee =$_FILES['picture2']['tmp_name'];
move_uploaded_file($temp_namee,'upload/'.$namee);

$pri=$_POST['price'];
//echo $pri;
$ite=$_POST['items'];
//echo $ite;
$cat=$_POST['cat'];
//echo $cat;
$ing=$_POST['ing'];
//echo $ing;
$tag=$_POST['tags'];
//echo $tag;
$sel="select cat_id from tb_category where category='$cat' ";
$obj=new db();
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
echo $strr[0];
//echo "success";
$lo=$strr[0];
$sql="update tb_product set product='$pro',descr='$des',picture='$name',picture2='$namee',price='$pri',items='$ite',cat_id=$lo,ing='$ing',tags='$tag' where product_id=$id";
//$obj=new db();
$obj->execute($sql);
 }
 header("location:viewprod.php");
?>