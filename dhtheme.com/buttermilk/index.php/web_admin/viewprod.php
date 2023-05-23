<?php
include("../features/joomla-virtuemart/connection.php");
include("check_session.php");
//session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
	$sel="SELECT * FROM tb_product WHERE status='1'";
	$obj=new db();
	$select=$obj->execute($sel);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
function confirm_alert(node) {
    return confirm("Please click on OK to continue.");
}
</script>
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
	<form action="prodsearch.php" method="post" class="form-horizontal ">
    <input type="text" name="query" id="query" />
    <input type="submit" value="Search" name="submittttt" id="submittttt"/>
</form>
	<h1>View Products </h1></div><br>

<div style="overflow-x:scroll;">
	<form  class="form-horizontal " name="myForm" method="post" action="#" enctype="multipart/form-data" accept-charset="UTF-8">
		<?php
	if(mysqli_num_rows($select)>0)
   {



echo "<table border='1'class='table table-bordered table-hover table-striped' style='font-size:18px'>
<tr>
<th>Product</th>
<th>Description</th>
<th>Product pic</th>
<th>Nutrients</th>
<th>Price</th>
<th>no. of item</th>

<th>Ingredients</th>
<th>Tagline</th>
<th>Action</th>
</tr>";
while($row=mysqli_fetch_array($select))
{
echo "<tr>";
echo "<td>" . $row['product'] . "</td>";
echo "<td>" . $row['descr'] . "</td>";
echo "<td>" . $row['picture'];
?>
<img src="upload/<?php echo $row['picture']; ?>" width="150px" height="100px">
</td>
<?php
echo "<td>" . $row['picture2'];
?>
<img src="upload/<?php echo $row['picture2']; ?>" width="150px" height="100px">
</td>
<?php
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['items'] . "</td>";

echo "<td>" . $row['ing'] . "</td>";

echo "<td>" . $row['tags'];
?>
</td>
<td>
<br>
<a href="produp.php?id= <?php echo $row['product_id']; ?>" onclick="return confirm_alert(this);">Edit</a>
<br>
<a href="proddel.php?id= <?php echo $row['product_id']; ?>" onclick="return confirm_alert(this);">Delete</a>
<?php
echo "</td>";

echo "</tr>";

}
}

echo "</table>"; 
?>
	</form>
		</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
<?php



?>