<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//echo $lid;
 if(isset($_POST['submit']))
 {
 	$obj=new db();
$log=strval($lid);
$sel="SELECT * FROM tb_product INNER JOIN tb_addcart ON tb_product.product_id=tb_addcart.product_id WHERE tb_addcart.status=0 && tb_addcart.login_id=$lid";
	
	$select=$obj->execute($sel);
	$rowCount=mysqli_num_rows($select);
	//echo $rowCount;
$total_price = 0;

//$rowCount =  count($_POST['product_id']); 

  
    for($i=1; $i<=$rowCount; $i++)
        {
       
        $id = $_POST['productid'][$i -1];
        $cart_id = $_POST['cartid'][$i -1];
        
        
        
   

$quantity=$_POST['quantity'][$i -1];
//echo $quantity;
$package=$_POST['pack'][$i -1];
//echo $package;
$delivery=$_POST['deli'][$i -1];
//echo $delivery;
//$id=$_POST['proid'];
//echo $id;

$sel="select pack_id from tb_package where package='$package' ";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
//echo $strr[0];
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
 //echo $strrr[0];
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
$total_price +=  $q * $d * $p;
//echo $total_price;

$sqlll="Insert into tb_cartpurdet(quantity,pack_id,deliverytype_id,cart_id,status,login_id,product_id,total) values('$quantity','$pack','$deli','$cart_id',0,'$lid','$id','$total')";
//$objj=new db();
$obj->execute($sqlll);


}
$tt=$total_price;
$sqlllll="Insert into tb_carttotal(total,status,login_id) values($tt,0,$lid)";
//$objj=new db();
$obj->execute($sqlllll);
//echo $d;
header("location:cartpuraddress.php?id= $ca_id");
}




?>
