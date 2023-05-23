<?php
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
//session_start();
//$lid=$_SESSION['lid'];
//if($lid>0)
//{
  $sel="SELECT tb_login.email,tb_login.login_id,tb_reg.fname,tb_reg.lname,tb_reg.phone FROM tb_login INNER JOIN tb_reg ON tb_login.login_id=tb_reg.login_id WHERE tb_login.status=1 && tb_login.role='user'";
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
  <form action="cussearch.php" method="post" class="form-horizontal ">
    <input type="text" name="query" id="query" />
    <input type="submit" value="Search" name="submittttt" id="submittttt"/>
</form>
  <h1>View User </h1></div><br>

<div style="overflow-x:scroll;">
  <form  class="form-horizontal " name="myForm" method="post" action="#">
  <?php
  if(mysqli_num_rows($select)>0)
   {



echo "<table border='1'  class='table table-bordered table-hover table-striped' style='font-size:18px'>
<tr>
<th>First name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Block</th>
</tr>";
while($row=mysqli_fetch_array($select))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
?>
<td>
  
<a href="block.php?id= <?php echo $row['login_id']; ?>" onclick="return confirm_alert(this);">Block</a>

</td>
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