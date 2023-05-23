<?php
///session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
include("check_session.php");
	include("../features/joomla-virtuemart/connection.php");
	//echo $lid;
	if(isset($_POST['submit']))
 {

//$name =$_FILES['file']['name'];
//echo $name;
//$temp_name =$_FILES['file']['tmp_name'];
//move_uploaded_file($temp_name,'upload/'.$name);
 
$pro=$_POST['product'];
//echo $pro;
$des=$_POST['desc'];
//echo $des;
$name =$_FILES['picture']['name'];
//echo $name;
$temp_name =$_FILES['picture']['tmp_name'];
move_uploaded_file($temp_name,'upload/'.$name);
$namee =$_FILES['picture2']['name'];
//echo $namee;
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
$mdate=$_POST['dates'];
$edate=$_POST['datexp'];
//echo $tag;
/*
$sql="Insert into tb_login(email,password,status,role) values('$email','$pass',0,'user')";
$obj=new db();
$obj->execute($sql);*/
$sel="select cat_id from tb_category where category='$cat' ";
$obj=new db();
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
echo $strr[0];
//echo "success";
$lo=$strr[0];

//echo $str['login_id']; or option of above
$sqlll="Insert into tb_product(product,descr,picture,picture2,price,items,cat_id,ing,tags,status,mdate,edate) values
('$pro','$des','$name','$namee','$pri','$ite',$lo,'$ing','$tag','1','$mdate','$edate')";
$objj=new db();
$objj->execute($sqlll);
}
 header("location:addprod.php");
	
	?>



