<?php
//session_start();
//$lid=$_SESSION['lid'];
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//echo $lid;
//$id=$_GET['id'];
//echo $id;

//include("connection.php");
 
//$name =$_FILES['file']['name'];
	
$pro=$_POST['FirstName'];
//echo $pro;
$des=$_POST['LastName'];
//echo $des;


$pri=$_POST['Phone'];
//echo $pri;

//$sel="select cat_id from tb_category where category='$cat' ";
$obj=new db();

$sql="update tb_reg set fname='$pro',lname='$des',phone='$pri' where login_id=$lid";
//$obj=new db();
$obj->execute($sql);
 
 header("location:profile.php");
?>