<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");

$id=$_GET['id'];
echo $id;
if(isset($_POST['submit']))
 {

$security_code=$_POST["cardCVV"];
$new_balance=0;
echo $security_code;
$sel="SELECT * FROM bank_info where status=1 && name_on_card='customer' && cvv=$security_code";
	$obj=new db();
	$select=$obj->execute($sel);
	$rowcount = mysqli_num_rows($select);
	if($rowcount==0)
	{


												echo "<script>
												alert('Wrong CVV !Enter correct CVV');
												window.location='userhome.php';
												</script>";

	}
	else if ($rowcount==1)
			{

			$customer_bank_info="SELECT * FROM bank_info WHERE  status='VALID' and name_on_card='customer'";
			$selectt=$obj->execute($customer_bank_info);
			$row_customer=mysqli_fetch_array($selectt);

			$old_balance=$row_customer['balance_amount'];
			$sqq="SELECT * from purchasedetails where insertdate IN (SELECT MAX( insertdate ) FROM purchasedetails WHERE product_id = $id && login_id=$lid) ";
																$se=$obj->execute($sqq);
																
							   										$rowss=mysqli_fetch_array($se);
																	$tot_amount=$rowss['total'];

				if($old_balance<$tot_amount)
				{
					echo "<script>
															alert('Insufficient Balance in your card');
															window.location='userhome.php';
															</script>";
				}
			else
					{

					$new_balance=$old_balance-$tot_amount;
					$sql2="  UPDATE bank_info SET balance_amount=$new_balance WHERE  cvv=$security_code and name_on_card=customer ";
					$see=$obj->execute($sql2);
					$admin_sql="select * from bank_info where name_on_card='admin'";
					$seee=$obj->execute($admin_sql);
					$admin_balnce=mysqli_fetch_array($seee);
					$admin_old_bal=(int)$admin_balnce['balance_amount'];
					$admin_new_balance=$admin_old_bal+$tot_amount;
					$sql2= "UPDATE bank_info SET balance_amount=$admin_new_balance WHERE  name_on_card='admin' ";


					echo"<script>alert('ordering confirmed');
					window.location='userhome.php';

					</script>";




					}

									//$obj=new db();
									$sql="update tb_purchasedetails set status='1' where purchase_id=$id";
									//$obj=new db();
									$obj->execute($sql);
									$product=$_POST['prod'];
									$it=$_POST['prodd'];
									$qua=$_POST['proddd'];
									$no=$it-$qua;
									//echo $no;
									$decre = "UPDATE tb_product SET items=$no WHERE product_id=$product";
									$obj->execute($decre);

					}



			//cvv match end

	
            else
			{
			echo "Card verification failed";
			}


/*
$obj=new db();
$sql="update tb_purchasedetails set status='1' where purchase_id=$id";
//$obj=new db();
$obj->execute($sql);
$product=$_POST['prod'];
$it=$_POST['prodd'];
$qua=$_POST['proddd'];
$no=$it-$qua;
//echo $no;
$decre = "UPDATE tb_product SET items=$no WHERE product_id=$product";
$obj->execute($decre);*/
//header("location:userhome.php");
}
?>