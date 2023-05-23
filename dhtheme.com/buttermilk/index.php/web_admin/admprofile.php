<?php
  include("../features/joomla-virtuemart/connection.php");
  include("check_session.php");

  $sel="SELECT * FROM tb_reg where login_id=$lid";
	$obj=new db();
	$select=$obj->execute($sel);
	$row=mysqli_fetch_array($select);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>My Profile</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Welcome  </h1>

<form action="adminedit.php" id="create_customer" name="create_customer" accept-charset="UTF-8" method="post"  enctype="multipart/form-data"class="form-horizontal ">
<div class="form-group">
																										
																																			
									<div class="group-control">
									</div>
									</div>
									<div class="form-group">
									<label id="jform_name-lbl"  title="Name" data-content="Enter your name.">
	                                         &nbsp &nbsp   &nbsp  First Name : <?php echo $row['fname'];?></label>
																		
									
								</div>
								
									<div class="form-group">
									<label id="jform_username-lbl"  title="Username" data-content="Enter your desired username.">
	                                      &nbsp    &nbsp &nbsp     Last Name : <?php echo $row['lname'];?></label>
																		
									
								</div>
								
								<div class="form-group">
									<label id="jform_email2-lbl" title="Confirm Email Address" data-content="Phone number.">
									        &nbsp    &nbsp  &nbsp Phone   &nbsp &nbsp &nbsp  : <?php echo $row['phone'];?></label>
																		
									
								</div>
								
																
																												
																						
				<div class="form-group">
					<input type="submit" id="submit" name="submit" value=" Want to Edit" class="btn btn-success">
					<a href="changepass.php" class="btn btn-success">Change password</a>
				</div></form>


</div><br>
	<div class="panel-body">
		<h3>
</h3>
	</div>
</div></div></div>
<?php 
include("include/js.php"); ?>
</body>
</html>
<?php 

?>