<?php
include("connection.php");
//$objj=new db();
//$objj->execute($sql);

//if (mysqli_num_rows > 0) {
   // echo "The email already exists.";


//}

if (isset($_POST['email_check'])) {
  	$email = $_POST['Email'];
  	//$sql = "SELECT * FROM users WHERE email='$email'";
  	//$results = mysqli_query($db, $sql);
  	$sql = "SELECT email FROM tb_login WHERE email='$email' && status='2'";
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