<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
$id=$_GET['id'];
//echo $id;
 if(isset($_POST['submit']))
 {


 
$fullname=$_POST['fullname'];
//echo $fullname;
$phone=$_POST['Phone'];
//echo $phone;
$address=$_POST['address'];
//echo $address;
$places=$_POST['places'];
//echo $places;
$payment=$_POST['payment'];
//echo $payment;

$obj=new db();

$sel="select place_id from tb_places where place='$places' ";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
//echo $strr[0];
//echo "success";
$pack=$strr[0];




if($payment == 'online payment')
{



$sqlll="Insert into tb_deliveryaddress(fullname,phone,address,place_id,paymentype,purchase_id,status) values
('$fullname','$phone','$address','$pack','$payment','$id',0)";
//$objj=new db();
$obj->execute($sqlll);
header("location:payment/payment.php?id= $id");	
}
else
{
	$sqlll="Insert into tb_deliveryaddress(fullname,phone,address,place_id,paymentype,purchase_id,status) values
('$fullname','$phone','$address','$pack','$payment','$id',1)";

//$objj=new db();
$obj->execute($sqlll);
$sql="update tb_purchasedetails set status='1' where purchase_id=$id";
//$obj=new db();
$obj->execute($sql);

$pro="SELECT tb_product.product_id,tb_product.items,purchasedetails.quantity FROM tb_product INNER JOIN purchasedetails ON tb_product.product_id=purchasedetails.product_id where purchasedetails.purchase_id=$id";
 
  $prod=$obj->execute($pro);
  $strr=mysqli_fetch_array($prod);
 //echo $strr[0];
//echo "success";
$lo=$strr[0];
echo $lo;
$it=$strr[1];
$qua=$strr[2];
echo $qua;
echo $it;
$no=$it-$qua;
echo $no;
$decre = "UPDATE tb_product SET items=$no WHERE product_id=$lo";
$obj->execute($decre);
	echo "<script type='text/javascript'>alert('ordered successfully');</script>";
	header("location:userhome.php");

}
}
//header("location:purchaddress.php?id= $id");

?>
