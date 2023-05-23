
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
	<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
	    <script type="text/javascript" language="javascript" src="javascripts/scriptpass.js"></script>
	    <script type="text/javascript">
function confirm_alert(node) {
    return confirm("Please click on OK to continue.");
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Change Password</title>
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
<form action="changeaction.php" id="create_customer" name="create_customer" accept-charset="UTF-8" method="post"  enctype="multipart/form-data">

																																			<div class="form-group">
																										
									<div class="group-control">
									
									<div class="form-group">
									<label id="jform_password3-lbl" for="jform_password3" class="hasPopover required" title="Password" data-content="Enter your desired password.">
									Current Password</label>
																		
									<div class="group-control">
										<input type="password" name="currentpass" id="currentpass" value=""  autocomplete="off"    size="30" maxlength="99"  />									</div>
								</div>
												<span id="cupassword_error_message" style="color:red"></span>	
									<div class="form-group">
									<label id="jform_password1-lbl" for="jform_password1" class="hasPopover required" title="Password" data-content="Enter your desired password.">
									New Password</label>
																		
									<div class="group-control">
										<input type="password" name="CreatePassword" id="CreatePassword" value=""  autocomplete="off"    size="30" maxlength="99"   />									</div>
								</div>
												<span id="password_error_message" style="color:red"></span>																<div class="form-group">
									<label id="jform_password2-lbl" for="jform_password2" class="hasPopover required" title="Confirm Password" data-content="Confirm your password.">
									Confirm Password</label>
																		
									<div class="group-control">
										<input type="password" name="CPassword" id="CPassword" value=""  autocomplete="off" class="validate-password required"   size="30" maxlength="99" required aria-required="true"  />									</div>
								</div>
										<span id="cpassword_error_message" style="color:red"></span>	
																
																												
																						
				<div class="form-group">
					<input type="submit" id="submit" name="submit" value="Edit" class="btn btn-success" onclick="return confirm_alert(this);">
					
				</div>
							</form>
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