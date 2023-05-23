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
$upd="update tb_login set status=0 where login_id=$id";
$obj=new db();
$obj->execute($upd);
header("location:viewcust.php");
?>