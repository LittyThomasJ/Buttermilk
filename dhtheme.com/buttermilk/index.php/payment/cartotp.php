<?php
include("../check_session.php");
include("../features/joomla-virtuemart/connection.php");
//echo $lid;
//$id=$_GET['id'];
//echo $id;
$obj=new db();
$m=$_GET['b'];
//echo $m;
$bid=$_GET['c'];
$amount=$_GET['d'];
//$user=$_SESSION['sess'];
/*
$sqq="SELECT * from tb_cartpurdet where insdate IN (SELECT MAX( insdate ) FROM cartpurdet WHERE product_id = $m && login_id=$lid) ";
                                $se=$obj->execute($sqq);
                                
                                    $rowss=mysqli_fetch_array($se);*/

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
    $sellll="SELECT * FROM tb_cartpurdet WHERE insdate = (SELECT max(insdate) FROM tb_cartpurdet WHERE login_id=$lid && status='0')";
$deee=$obj->execute($sellll);
  //$roww=mysqli_fetch_array($selectt);
while($strrr=mysqli_fetch_array($deee))
{
$ca_id=$strrr['cartpurdet_id'];
//echo $ca_id;
$pro_id=$strrr['product_id'];
//echo $pro_id;
 $cartt_id=$strrr['cart_id'];
 $quant="SELECT quantity from tb_cartpurdet where cart_id='$cartt_id'";
$qua=$obj->execute($quant);
//echo $login; //error due to string
$q=mysqli_fetch_array($qua);

  $qu=$q[0];
//echo $qu;
$proddet="SELECT items from tb_product where product_id='$pro_id'";
$pd=$obj->execute($proddet);
$pdd=mysqli_fetch_array($pd);
$items=$pdd[0];
//echo $items;
$no=$items-$qu;
//echo $no;
$decre = "UPDATE tb_product SET items=$no WHERE product_id='$pro_id'";
$obj->execute($decre);

$sql="update tb_cartpurdet set status='1' where cartpurdet_id=$ca_id";
//$obj=new db();
$obj->execute($sql);
$cartup="update tb_addcart set status='1' where cart_id= $cartt_id";
//$obj=new db();
$obj->execute($cartup);
$cartadd="update cartdeladdress set status='1' where cartpurdet_id=$ca_id";
//$obj=new db();
$obj->execute($cartadd);
 $qw5="INSERT INTO payment(login_id,status,bank_id,pur_id) VALUES('$lid',2,'$bid','$ca_id')"; 
     $obj->execute($qw5);
}
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