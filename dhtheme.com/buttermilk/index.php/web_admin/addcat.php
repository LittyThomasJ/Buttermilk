<?php
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
$sel="SELECT * FROM tb_category WHERE status='1'";
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
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/scriptt.js"></script>
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
	<h1>Add Categories </h1></div><br>

<div style="overflow-x:scroll;">



<form action="cataction.php" name="cat" method="post" id="cat">
<input name="category" class="input-lg" type="text"  id="category" style="font-size:18px; width:200px" placeholder="Add_category" autofocus required>
<span id="product_error_message" style="color:red"></span><br><br>

<hr>
 <input type="submit" class="btn btn-success" name="submit" id="submit" style="font-size:18px">
</form>


	</div>	
	<div style="overflow-x:scroll;">
	<form  class="form-horizontal " name="myForm" method="post" action="#">
		<?php
	if(mysqli_num_rows($select)>0)
   {



echo "<table border='1' class='table table-bordered table-hover table-striped' style='font-size:18px'>
<tr>
<th text='blue'>Category</th><th>When</th><th>Action</th>


</tr>";
while($row=mysqli_fetch_array($select))
{
echo "<tr>";

echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['date_time'] . "</td>";
?>

<td>
<a href="catup.php?id= <?php echo $row['cat_id']; ?>" onclick="return confirm_alert(this);">Edit</a>

<a href="catdel.php?id= <?php echo $row['cat_id']; ?>" onclick="return confirm_alert(this);">Delete</a>
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