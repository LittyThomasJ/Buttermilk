<?php
//$username=$_SESSION[''];
 include("../features/joomla-virtuemart/connection.php");
  include("check_session.php");
//echo $lid;
$sel="SELECT * FROM tb_reg where login_id=$lid";
	$obj=new db();
	$select=$obj->execute($sel);
	$row=mysqli_fetch_array($select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
	    <script type="text/javascript" language="javascript" src="javascripts/scriptedit.js"></script>
	    <script type="text/javascript">
function confirm_alert(node) {
    return confirm("Please click on OK to continue.");
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit Admin</title>
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
<form action="profileaction.php" id="create_customer" name="create_customer" accept-charset="UTF-8" method="post"  enctype="multipart/form-data">

						<div class="form-group">
																																																							
									<div class="group-control">
									</div>
									</div>
									<div class="form-group">
									<label id="jform_name-lbl" for="jform_name" class="hasPopover required" title="Name" data-content="Enter your name.">
	                                First Name</label>
																		
									<div class="group-control">
										<input type="text" name="FirstName" id="FirstName"  value="<?php echo $row['fname'];?>"     />
										
									</div>
								</div>
								<span id="name_error_message" style="color:red" ></span>
									<div class="form-group">
									<label id="jform_username-lbl" for="jform_username" class="hasPopover required" title="Username" data-content="Enter your desired username.">
	                                Last Name</label>
																		
									<div class="group-control">
										<input type="text" name="LastName" id="LastName"  value="<?php echo $row['lname'];?>" class="validate-username required" size="30"     />
									</div>
								</div>
								<span id="lname_error_message" style="color:red"></span>
								<div class="form-group">
									<label id="jform_email2-lbl" for="jform_email2" class="hasPopover required" title="Confirm Email Address" data-content="Phone number.">
									Phone</label>
																		
									<div class="group-control">
										<input type="text" name="Phone" class="#" id="Phone" value="<?php echo $row['phone'];?>"
 										size="30"   />									
 									</div>
								</div>
								<span id="phone_error_message" style="color:red"></span>
																
																												
																						
				<div class="form-group">
					<input type="submit" id="submit" name="submit" value="Edit" class="btn btn-success" onclick="return confirm_alert(this);">
					
				</div>
							</form></div><br>
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