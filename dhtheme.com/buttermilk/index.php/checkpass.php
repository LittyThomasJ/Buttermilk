<?php
include("features/joomla-virtuemart/connection.php");
include("check_session.php");

//$objj=new db();
//$objj->execute($sql);

//if (mysqli_num_rows > 0) {
   // echo "The email already exists.";


//}

if (isset($_POST['pass_check'])) {
  	$email = md5($_POST['currentpass']);
  	//$sql = "SELECT * FROM users WHERE email='$email'";
  	//$results = mysqli_query($db, $sql);
  	$sql = "SELECT password FROM tb_login WHERE password='$email' AND login_id=$lid ";
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