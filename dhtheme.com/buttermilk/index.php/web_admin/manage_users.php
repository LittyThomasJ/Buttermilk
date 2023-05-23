<?php
//session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
	//echo $lid;
	include("check_session.php");
	include("../features/joomla-virtuemart/connection.php");
	
	$sel="SELECT tb_login.email,tb_login.login_id,tb_reg.fname,tb_reg.lname,tb_reg.phone FROM tb_login INNER JOIN tb_reg ON tb_login.login_id=tb_reg.login_id WHERE tb_login.status=0";
	$obj=new db();
	$select=$obj->execute($sel);
	
	
	
	
	
	
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Manage User </h1></div><br>

<div style="overflow-x:scroll;">
<!--<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>User Name</th>
                <th>User Password</th>
	<th><a href="add_user.php">Add New</a></th></tr>	
<tr><td>$user_name</td><td>$user_password</td>

<td>
<a href='edit_user.php?user_id=$user_id'>Edit</a>
<a href='manage_users.php?user_id=$user_id&action=delete'>Delete</a>
</td></tr>

</table>-->
<?php
if(mysqli_num_rows($select)>0)
{
	?>
<table>
<tr>
<th>
Name
</th>
<th>
Lname
</th>

<th>
Email
</th>
<th>
Phone
</th>

<th>
Action
</th>
</tr>
<?php
while($row=mysqli_fetch_array($select))
{
	?>

<tr>
<td>
<?php
echo $row['fname'];
?>
</td>
<td>
<?php
echo $row['lname'];
?>
</td>

<td>
<?php
echo $row['email'];
?>
</td>
<td>
<?php
echo $row['phone'];

?>
</td>

<td>
	
<a href="approveuser.php?id= <?php echo $row['login_id']; ?>">Approve</a>
<a href="Reject.php?id= <?php echo $row['login_id']; ?>">Reject</a>
</td>
</tr>
<?php 
}
?>
</table>
<?php 
}
else
{ 
echo "no user found";
 
}
?>
</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
<?php



?>