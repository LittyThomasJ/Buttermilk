<?php
//include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
 if(isset($_POST['submit']))
 {

//$name =$_FILES['file']['name'];
//echo $name;
//$temp_name =$_FILES['file']['tmp_name'];
//move_uploaded_file($temp_name,'upload/'.$name);
 
$namee=$_POST['category'];
//echo $namee;




$sql="Insert into tb_package(package,status) values('$namee','1')";
$obj=new db();
$obj->execute($sql);


}

 header("location:addpackagetype.php");
?>