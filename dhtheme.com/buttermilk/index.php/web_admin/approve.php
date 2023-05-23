<!--<html>
<head>
<link rel="stylesheet" href="css/style.css">

<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<div class="header">
<a  href="admin.php">Home</a>
<a  href="newuser.php">New user</a>
<a class="active" href="approveuser.php">Approve user</a>

<a  href="form.html">SignIn</a>
</div>
<h3>Approve user </h3>
<div class=footer>
</div>
</body>
</html>-->
<?php
//include("check_session.php");
session_start();
$id=$_GET['id'];
//echo $id;
include("../features/joomla-virtuemart/connection.php");
$obj=new db();
$select = "SELECT * FROM tb_login where login_id=$id && role='farmer'";
$sel=$obj->execute($select);
$row = mysqli_fetch_array($sel);
$email_id = $row['email'];
 $to = $email_id;
      $subject = "Account Activation";
      //  $txt = "Hi, we have reset your password : $password.";
      $message = "Hi  ,Your Account has been activated.
      From tomorrow onwards you can sell milk to your nearby store of Buttermilk.";

      $headers = "From: indujasaji2020@gmail.com";
    mail($to,$subject,$message,$headers);
$upd="update tb_login set status=3 where login_id=$id && role='farmer'";

$obj->execute($upd);
header("location:viewfarmers.php");
?>