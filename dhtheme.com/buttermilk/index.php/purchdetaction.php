<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
$id=$_GET['id'];
echo $lid;
 if(isset($_POST['submit']))
 {


 
$quantity=$_POST['quantity'];
//echo $namee;
$package=$_POST['pack'];
//echo $lname;
$delivery=$_POST['deli'];


$obj=new db();

$sel="select pack_id from tb_package where package='$package' ";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
// echo $strr[0];
//echo "success";
$pack=$strr[0];
$sell="select deliverytype_id from tb_deliverytype where deliverytype='$delivery' ";
$de=$obj->execute($sell);
//echo $login; error due to string
$str=mysqli_fetch_array($de);
 //echo $str[0];
//echo "success";
$deli=$str[0];


$selll="select price from tb_product where product_id='$id' ";
$pri=$obj->execute($selll);
//echo $login; error due to string
$strrr=mysqli_fetch_array($pri);
 //echo $str[0];
//echo "success";
$price=$strrr[0];


$q = floatval($quantity);
//echo "$q";
$d = floatval($delivery);
//echo "$d";
$p = floatval($price);
//echo "$p";
$total = $q * $d * $p;
echo $total;
//echo $str['login_id']; or option of above
$sqlll="Insert into purchasedetails(quantity,pack_id,deliverytype_id,login_id,status,total,product_id) values
('$quantity','$pack','$deli','$lid','0','$total','$id')";
//$objj=new db();
$obj->execute($sqlll);
}
header("location:purchaddress.php?id= $id");

?>
