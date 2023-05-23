<?php
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
//session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
  $sel="SELECT * FROM purchasedetails INNER JOIN tb_login ON purchasedetails.login_id=tb_login.login_id INNER JOIN tb_reg ON tb_login.login_id=tb_reg.login_id INNER JOIN tb_product ON purchasedetails.product_id=tb_product.product_id WHERE purchasedetails.status=1 ";
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
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">

  <h1>View Orders </h1></div><br>

<div style="overflow-x:scroll;">
  <form  class="form-horizontal " name="myForm" method="post" action="#">
  <?php
  if(mysqli_num_rows($select)>0)
   {



echo "<table border='1'  class='table table-bordered table-hover table-striped' style='font-size:18px'>
<tr>
<th>Product</th>
<th>First name</th>
<th>Last Name</th>
<th>Quantity</th>
<th>Phone</th>
<th>Total</th>
<th>Date</th>
</tr>";
while($row=mysqli_fetch_array($select))
{
echo "<tr>";
echo "<td>" . $row['product'] . "</td>";

echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['total'] . "</td>";
echo "<td>" . $row['insertdate'] . "</td>";
?>

<?php
echo "</tr>";

}

//echo "</table>"; 
}
?>

<?php
$sell="SELECT * FROM tb_addcart INNER JOIN tb_login ON tb_addcart.login_id=tb_login.login_id INNER JOIN tb_reg ON tb_login.login_id=tb_reg.login_id INNER JOIN tb_product ON tb_addcart.product_id=tb_product.product_id INNER JOIN tb_cartpurdet ON tb_cartpurdet.cart_id=tb_addcart.cart_id WHERE tb_addcart.status=1 && tb_cartpurdet.status=1";
  $obj=new db();
  $selectt=$obj->execute($sell);

  if(mysqli_num_rows($selectt)>0)
   {



//echo "<table border='1'  class='table table-bordered table-hover table-striped' style='font-size:18px'>
//<tr>
//<th>Product</th>
//<th>First name</th>
//<th>Last Name</th>
//<th>Quantity</th>
//<th>Phone</th>
//<th>Total</th>
//</tr>";
while($roww=mysqli_fetch_array($selectt))
{
echo "<tr>";
echo "<td>" . $roww['product'] . "</td>";

echo "<td>" . $roww['fname'] . "</td>";
echo "<td>" . $roww['lname'] . "</td>";
echo "<td>" . $roww['quantity'] . "</td>";
echo "<td>" . $roww['phone'] . "</td>";
echo "<td>" . $roww['total'] . "</td>";
echo "<td>" . $roww['insdate'] . "</td>";
?>

<?php
echo "</tr>";

}

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

?>