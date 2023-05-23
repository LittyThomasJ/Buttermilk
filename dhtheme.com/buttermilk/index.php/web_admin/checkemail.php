<?php
//include("connection.php");
//$objj=new db();
//$objj->execute($sql);

//if (mysqli_num_rows > 0) {
   // echo "The email already exists.";


//}
include("../features/joomla-virtuemart/connection.php");
include("check_session.php");
if (isset($_POST['product_check'])) {
  	$email = $_POST['product'];
  	//$sql = "SELECT * FROM users WHERE email='$email'";
  	//$results = mysqli_query($db, $sql);
  	$sql = "SELECT product FROM tb_product WHERE product='$email'";
$objj=new db();
$login=$objj->execute($sql);
  	if (mysqli_num_rows($login) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  ?>