<?php
include("../check_session.php");
include("../features/joomla-virtuemart/connection.php");
//echo $lid;
//$id=$_GET['id'];
//echo $id;
$obj=new db();
$m=$_GET['b'];
$bid=$_GET['c'];
$amount=$_GET['d'];
//$user=$_SESSION['sess'];

$sqq="SELECT * from purchasedetails where insertdate IN (SELECT MAX( insertdate ) FROM purchasedetails WHERE product_id = $m && login_id=$lid) ";
                                $se=$obj->execute($sqq);
                                
                                    $rowss=mysqli_fetch_array($se);

$tyu2="select * from bank_info where login_id=20";
$see=$obj->execute($tyu2);
$ba=mysqli_fetch_array($see);
$balan=$ba['balance_amount'];
$credit=$balan+$amount;
$sql4="select * from tb_login where login_id='$lid'";
$sss=$obj->execute($sql4);
$exe4=mysqli_fetch_array($sss);
$mail=$exe4['email'];
//$ide=$exe4['user_id'];
$date=time();
if(isset($_POST['submit'])){
    $otp=md5($_POST['otp']);
    $ch="select * from bank_info where otp='$otp' and bank_id='$bid'";
    $ssss=$obj->execute($ch);
    $ch2=mysqli_fetch_array($ssss);
    $no=mysqli_num_rows($ssss);
    if($no>0){
    $balance=$ch2['balance_amount'];
    $debit=$balance-$amount;
    }
    $count=mysqli_num_rows($ssss);
    if($count==1){
        if($balance>0){
      $qw="update bank_info set otp='0' where bank_id='$bid'";
      $obj->execute($qw);

      $qw2="update bank_info set balance_amount='$debit' where login_id='20'";
     $obj->execute($qw2);
      $qw3="update bank_info set balance_amount='$credit' where login_id='$lid'";
      $obj->execute($qw3);
 //$qw4=mysqli_query($con,"insert into application(tour_id,Username,status)values('$m','$user','1')");
     // echo $lid;
      //echo $bid;
      //echo $m;
     $qw5="INSERT INTO payment(login_id,status,bank_id,pur_id) VALUES('$lid',1,'$bid','$m')"; 
     $obj->execute($qw5);

$sql="update purchasedetails set status='1' where purchase_id=$m";
                  //$obj=new db();
                  $obj->execute($sql);
                  $product=$_POST['prod'];
                  //echo $product;
                  $it=$_POST['prodd'];
                  //echo $it;
                  $qua=$_POST['proddd'];
                  //echo $qua;
                  $no=$it-$qua;
                  //echo $no;
                  $decre = "UPDATE tb_product SET items=$no WHERE product_id=$product";
                  $obj->execute($decre);
        header('location:success.php');
        }else{ ?>
           <div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>  Insufficient balance.</center>
  </div> 
       <?php }
    }
    else{ ?>
         <div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>   Invalid OTP.</center>
  </div>
   <?php }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
<script src="js/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
   <center><h1 style="color: #1D75D3"><b>BUTTERMILK</b></h1></center> 
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                      <center>
                        <h3 class="text-center">PAYMENT</h3>

                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png"></center>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                      <center>
                      <div class="form-group">
                                      <?php
                                      $pro="SELECT tb_product.product_id,tb_product.items,purchasedetails.quantity FROM tb_product INNER JOIN purchasedetails ON tb_product.product_id=purchasedetails.product_id where purchasedetails.purchase_id=$m && purchasedetails.login_id=$lid";
                                      $obj=new db();
 
                                          $prod=$obj->execute($pro);
                                          $strr=mysqli_fetch_array($prod);
                                         //echo $strr[0];
                                        //echo "success";
                                        $lo=$strr[0];
                                        //echo $lo;
                                        $it=$strr[1];
                                        //echo $it;
                                        $qua=$strr[2];
                                        //echo $qua;
                                      ?>
<input type="hidden" name="prod" id="prod" value="<?php echo $lo; ?>">
<input type="hidden" name="prodd" id="prodd" value="<?php echo $it; ?>">
<input type="hidden" name="proddd" id="proddd" value="<?php echo $qua; ?>">
</div>
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                   <p style="color:green"> The OTP has been sent  successfully to your registered mail (  <?php echo $mail; ?>  ).</p>
                                    Please enter the OTP in the field below to verify. 
                                   </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <br>
                                    <br>
                                    <input type="password" name="otp" class="form-control" placeholder=" Enter the OTP" />
                                    <br>
                                </div>
                            </div>
                        </div>
                       
                          <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-14">
                          <br>
                            <input type="submit" name="submit" value="PROCEED" class="btn btn-warning btn-lg btn-block">
                        </div>
                    </div>
                </div></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>