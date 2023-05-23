<?php
include("features/joomla-virtuemart/connection.php");
session_start();
 if(isset($_POST['submit']))
 {
	 $email=$_POST['Email'];
	//echo $email;
	//$pass=$_POST['Password'];
	$pass=md5($_POST['Password']);
	//echo $pass;
	$obj=new db();
	$select="select * from tb_login where email='$email' and password='$pass'";
	$data=$obj->execute($select);
	if(mysqli_num_rows($data)>0)
	{
		$row=mysqli_fetch_array($data);
		if($row['role']=='admin')
		{
			$_SESSION['lid']=$row['login_id'];
			$_SESSION['role']=$row['role'];
			header("location:web_admin/index.php");
		}
		else if($row['role']=='user')
		{
			$_SESSION['lid']=$row['login_id'];
			$_SESSION['role']=$row['role'];
			header("location:userhome.php");
		}
		else if($row['role']=='farmer' && $row['status']=='3')
		{
			$_SESSION['lid']=$row['login_id'];
			$_SESSION['role']=$row['role'];
			header("location:../farmerlogin.php");
		}

	}
	else
	{
		?>
		<script>
		alert("check username and password");
		window.location="shop.php";
		</script>
		<?php
		//echo "err";
		
	}
 }
?>