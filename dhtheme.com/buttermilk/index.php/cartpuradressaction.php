<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//$id=$_GET['id'];
//echo $id;
 if(isset($_POST['submit']))
 {
 	$obj=new db();
/*
$sellll="SELECT tb_cartpurdet.cartpurdet_id,tb_addcart.product_id,tb_cartpurdet.cart_id FROM tb_addcart INNER JOIN tb_cartpurdet ON tb_addcart.cart_id=tb_cartpurdet.cart_id WHERE tb_addcart.status=0 && tb_addcart.login_id=$lid && tb_cartpurdet.status=0";
$deee=$obj->execute($sellll);*/
//echo $login; error due to string
$sell="SELECT * FROM tb_cartpurdet WHERE insdate = (SELECT max(insdate) FROM tb_cartpurdet WHERE login_id=$lid && status='0')";
	//$obj=new db();
	$selectt=$obj->execute($sell);
	//$roww=mysqli_fetch_array($selectt);
while($strrr=mysqli_fetch_array($selectt))
{
$ca_id=$strrr['cartpurdet_id'];
//echo $ca_id;
$pro_id=$strrr['product_id'];
echo $pro_id;
 $cartt_id=$strrr['cart_id'];
//echo $cartt_id;
$fullname=$_POST['fullname'];
//echo $fullname;
$phone=$_POST['Phone'];
//echo $phone;
$address=$_POST['address'];
$places=$_POST['places'];
//echo $places;
$payment=$_POST['payment'];
//echo $payment;


$sel="select place_id from tb_places where place='$places' ";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
//echo $strr[0];
//echo "success";
$pack=$strr[0];

if($payment == 'online payment')
{
$sqlll="Insert into cartdeladdress(fullname,phone,address,place_id,paymentype,cartpurdet_id,status) values
('$fullname','$phone','$address','$pack','$payment','$ca_id',0)";
//$objj=new db();
$obj->execute($sqlll);
header("location:payment/cartpayment.php?id= $ca_id");	


}
else
{
	$sqlll="Insert into cartdeladdress(fullname,phone,address,place_id,paymentype,cartpurdet_id,status) values
('$fullname','$phone','$address','$pack','$payment','$ca_id',1)";
//$objj=new db();
$obj->execute($sqlll);


$quant="SELECT quantity from tb_cartpurdet where cart_id='$cartt_id'";
$qua=$obj->execute($quant);
//echo $login; error due to string
$q=mysqli_fetch_array($qua);

	$qu=$q[0];
//echo $qu;
$proddet="SELECT items from tb_product where product_id='$pro_id'";
$pd=$obj->execute($proddet);
$pdd=mysqli_fetch_array($pd);
$items=$pdd[0];
//echo $items;
$no=$items-$qu;
//echo $no;
$decre = "UPDATE tb_product SET items=$no WHERE product_id='$pro_id'";
$obj->execute($decre);

$sql="update tb_cartpurdet set status='1' where cartpurdet_id=$ca_id";
//$obj=new db();
$obj->execute($sql);
$cartup="update tb_addcart set status='1' where cart_id= $cartt_id";
//$obj=new db();
$obj->execute($cartup);
}
}
/*


if($payment == 'online payment')
{



$sqlll="Insert into tb_deliveryaddress(fullname,phone,address,place_id,paymentype,purchase_id,status) values
('$fullname','$phone','$address','$pack','$payment','$id',0)";
//$objj=new db();
$obj->execute($sqlll);
header("location:payment.php?id= $id");	
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

}*/
}
//header("location:purchaddress.php?id= $id");

?>
