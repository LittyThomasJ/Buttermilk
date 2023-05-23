<?php
//session_start();
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");

//$lid=$_SESSION['lid'];
//echo $lid;
$id=$_GET['id'];
//echo $id;

	$sel="SELECT * FROM tb_category where cat_id=$id";
	$obj=new db();
	$select=$obj->execute($sel);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/scriptt.js"></script>
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
	<h1>Update Category </h1></div><br>

<div style="overflow-x:scroll;">
<?php
$row=mysqli_fetch_array($select);

	?>
	<form name="cat" id="cat" action="editaction.php?id= <?php echo $row['cat_id']; ?>" method="post" class="form-horizontal ">
	<table>
	<tr><td>Category</td>
	<td><input type="text"  name="category" id="category" value="<?php echo $row['category'];?>" class="input-lg"/>
	<span id="product_error_message" style="color:red"></span></td></tr>
	<tr><td><input type="submit" value="submit" name="submit" id="submit" class="btn btn-success"></td></tr>
	</table>
	</form>

	</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
<?php

?>