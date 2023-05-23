<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//$id=$_GET['id'];
//echo $id;
 if(isset($_POST['submit']))
 {
 	$obj=new db();

$sellll="SELECT tb_cartpurdet.cartpurdet_id,tb_addcart.product_id,tb_cartpurdet.cart_id FROM tb_addcart INNER JOIN tb_cartpurdet ON tb_addcart.cart_id=tb_cartpurdet.cart_id WHERE tb_addcart.status=0 && tb_addcart.login_id=$lid";
$deee=$obj->execute($sellll);
//echo $login; error due to string
while($strrr=mysqli_fetch_array($deee))
{
$ca_id=$strrr[0];
echo $ca_id;
$pro_id=$strrr[1];
//echo $pro_id;
 $cartt_id=$strrr[2];
 $quant="SELECT quantity from tb_cartpurdet where cart_id='$cartt_id'";
$qua=$obj->execute($quant);
//echo $login; //error due to string
$q=mysqli_fetch_array($qua);

	$qu=$q[0];
//echo $qu;
$proddet="SELECT items from tb_product where product_id='$pro_id'";
$pd=$obj->execute($proddet);
$pdd=mysqli_fetch_array($pd);
$items=$pdd[0];
//echo $items;
$no=$items-$qu;
echo $no;
$decre = "UPDATE tb_product SET items=$no WHERE product_id='$pro_id'";
$obj->execute($decre);

$sql="update tb_cartpurdet set status='1' where cartpurdet_id=$ca_id";
//$obj=new db();
$obj->execute($sql);
$cartup="update tb_addcart set status='1' where cart_id= $cartt_id";
//$obj=new db();
$obj->execute($cartup);
}
//echo $no;
}
header("location:userhome.php");
?>