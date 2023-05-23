<?php
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
$pro=$_GET['id'];
echo $pro;
 if (isset($_POST['submit'])) {

  $review = $_POST['reviews'];
  echo $review;
   $product="SELECT * FROM stars where product_id=$pro && login_id=$lid";
    $obj=new db();
    $productt=$obj->execute($product);
    $nummm=mysqli_num_rows($productt);
   // echo $nummm;
        if (mysqli_num_rows($productt)>0)
         {
           
             $sqq= "UPDATE stars SET review='$review' WHERE product_id=$pro && login_id=$lid";
           $obj->execute($sqq);
        }

  }
 header("location:rating.php?id=$pro");
?>