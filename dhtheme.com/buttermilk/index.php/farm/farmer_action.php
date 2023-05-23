<?php
//include("connection.php");
include("../features/joomla-virtuemart/connection.php");
 if(isset($_POST['submit']))
 {


 
$name=$_POST['name'];
echo $name;
$email=$_POST['email'];
echo $email;
$phone=$_POST['phone'];
echo $phone;
$fat=$_POST['fat'];
echo $fat;
$namee =$_FILES['pic']['name'];
echo $namee;
$temp_name =$_FILES['pic']['tmp_name'];
move_uploaded_file($temp_name,'upload/'.$namee);

$milk=$_POST['milk'];
echo $milk;
$address=$_POST['address'];
echo $address;
$places=$_POST['places'];
echo $places;
$pass=md5($_POST['CreatePassword']);
echo $pass;




$sql="Insert into tb_login(email,password,status,role) values('$email','$pass',0,'farmer')";
$obj=new db();
$obj->execute($sql);
$sel="select login_id from tb_login where email='$email' and password='$pass' and role='farmer'";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);

$lo=$strr[0];

//echo $str['login_id']; or option of above
$sqlll="Insert into tb_farmer(name,phone,fat,pic,milk,address,places_id,login_id) values
('$name','$phone',$fat,'$namee',$milk,'$address',$places,$lo)";
$objj=new db();
$objj->execute($sqlll);
}
 header("location:farmer.php");
?>