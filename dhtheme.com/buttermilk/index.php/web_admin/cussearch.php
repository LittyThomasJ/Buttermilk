<?php
///session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
include("check_session.php");
	include("../features/joomla-virtuemart/connection.php");
	//echo $lid;
	if(isset($_POST['submittttt']))
 {


 
$prot=$_POST['query'];

//$pro=preg_replace("#[^0-9a-z]#i","",$prot);
//echo $prot;


//$sel="SELECT * FROM tb_reg
            //WHERE ('fname' LIKE '%".$pro."%') OR ('lname' LIKE '%".$pro."%')";
//$select="SELECT * FROM tb_reg WHERE fname LIKE %'".$pro."'%";
//$select="SELECT * FROM tb_reg WHERE fname LIKE '%". $pro ."%'";
$select="SELECT tb_login.email,tb_login.login_id,tb_reg.fname,tb_reg.lname,tb_reg.phone FROM tb_login INNER JOIN tb_reg ON tb_login.login_id=tb_reg.login_id WHERE (tb_login.status=1) AND (tb_login.role='user') AND (tb_reg.fname LIKE '%$prot%')";
	
$obj=new db();
$login=$obj->execute($select);
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
	
	<h1>View User </h1>
	 <form action="cussearch.php" method="post" class="form-horizontal ">
    <input type="text" name="query" id="query" value="<?php echo $prot; ?>"/>
    <input type="submit" value="Search" name="submittttt" id="submittttt"/>
</form>
</div><br>
<div style="overflow-x:scroll;">
	<form  class="form-horizontal " name="myForm" method="post" action="#">
	<?php
	if(mysqli_num_rows($login)>0)
   {



echo "<table border='1'  class='table table-bordered table-hover table-striped' style='font-size:18px'>
<tr>
<th>First name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Block<th>
</tr>";
while($row=mysqli_fetch_array($login))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
?>
<td>
	
<a href="block.php?id= <?php echo $row['login_id']; ?>">Block</a>

</td>
<?php
echo "</tr>";

}


echo "</table>"; 
}
else
{
	echo "<table>";
	echo "<tr>";
	echo "<td>Not Found</td>";
	echo "</tr>";
	echo "</table>";
}
?>
</form>
</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>

<?php
//$strr=mysqli_fetch_array($login);

}
 //header("location:addprod.php");
	
	?>


