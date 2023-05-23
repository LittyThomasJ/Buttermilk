<?php
include("connection.php");
 if(isset($_POST['submit']))
 {

//$name =$_FILES['file']['name'];
//echo $name;
//$temp_name =$_FILES['file']['tmp_name'];
//move_uploaded_file($temp_name,'upload/'.$name);
 
$namee=$_POST['FirstName'];
//echo $namee;
$lname=$_POST['LastName'];
//echo $lname;
$phone=$_POST['Phone'];
//echo $phone;
$email=$_POST['Email'];

//echo $email;

$pass=md5($_POST['CreatePassword']);
echo $pass;

$sql="Insert into tb_login(email,password,status,role) values('$email','$pass',1,'user')";
$obj=new db();
$obj->execute($sql);
$sel="select login_id from tb_login where email='$email' and password='$pass'";
$login=$obj->execute($sel);
//echo $login; error due to string
$strr=mysqli_fetch_array($login);
// echo $strr[0];
//echo "success";
$lo=$strr[0];

//echo $str['login_id']; or option of above
$sqlll="Insert into tb_reg(fname,lname,phone,login_id) values
('$namee','$lname',$phone,$lo)";
$objj=new db();
$objj->execute($sqlll);
}
 header("location:../../shop.php");
?>