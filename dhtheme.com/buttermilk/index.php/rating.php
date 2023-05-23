<?php
   //<?php
//$username=$_SESSION[''];
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//echo $lid;
$id=$_GET['id'];
//echo $id;
$sel="SELECT * FROM tb_product where product_id=$id";
    $obj=new db();
    $select=$obj->execute($sel);
    $rows=mysqli_fetch_array($select);
    $product_id=$rows['product_id'];
    //echo $product_id;
// $conn = new mysqli('localhost', 'root', '', 'ratingSystem');

    if (isset($_POST['save'])) {
        $uID = $_POST['uID'];
        $ratedIndex = $_POST['ratedIndex'];
        $pro = $_POST['myData'];
       // echo "<script> alert($pro);</script>";
        //echo $pro;
        $ratedIndex++;
        //echo $ratedIndex;
        $product="SELECT * FROM stars where product_id=$pro && login_id=$lid";
   // $obj=new db();
    $productt=$obj->execute($product);
    $nummm=mysqli_num_rows($productt);
    echo $nummm;
        if (mysqli_num_rows($productt)>0)
         {
           
             $sqq= "UPDATE stars SET rateIndex='$ratedIndex' WHERE product_id=$pro && login_id=$lid";
           $obj->execute($sqq);
        }
         else
        {
          
           $ql="INSERT INTO stars (rateIndex,product_id,login_id) VALUES ('$ratedIndex','$pro','$lid')";
             $obj->execute($ql);
             
            $sql = "SELECT id FROM stars where product_id=$pro && login_id=$lid ORDER BY id DESC LIMIT 1";
             $selectt=$obj->execute($sql);
            $uData = fetch_assoc($selectt);
            $uID = $uData['id'];
       }

        exit(json_encode(array('id' => $uID)));
    
}

    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div align="center" style="background: #000; padding: 50px;color:white;">
      Your rating on <?php echo $rows['product'];?>
      <br>
      <br>
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        <br><br>
        Overall rating:
        <?php 
        $sqll = "SELECT id FROM stars where product_id=$id";
    $view=$obj->execute($sqll);
    if(mysqli_num_rows($view)>0)
    {
    $numR = mysqli_num_rows($view);
//echo $num
    $sqlll = "SELECT SUM(rateIndex) AS total FROM stars where product_id=$id";
    $selecttt=$obj->execute($sqlll);
    $rData=mysqli_fetch_array($selecttt);
    $total=$rData['total'];
    

    $avg = $total / $numR;



        echo round($avg,2);

        }
         ?>
         <br>
         <br>
         <?php
         $prod= $rows['product_id']; 
         $reviews="SELECT * FROM stars where product_id=$prod && login_id=$lid";
    
    $reviewss=$obj->execute($reviews);
    $nums=mysqli_num_rows($reviewss);
   // echo $nummm;
        if (mysqli_num_rows($reviewss)>0)
         {
         $reviewsss = mysqli_fetch_array($reviewss);
         ?>
         <h4>Edit reviews</h4>
         <form name="rev" action="ratingaction.php?id=<?php echo $rows['product_id']; ?>" id="rev" method="POST">
         <textarea id="reviews" name="reviews" rows="4" cols="50" placeholder="write your reviews here" maxlength="50"><?php echo $reviewsss['review']; ?></textarea><br><br>
         <input type="submit" name="submit" id="submit" value="Submit" class="addtocart-button" style="background-color: green;color: white;width: 80px;height: 50px;border-radius: 25%;border: none">
         </form>
         <?php
       }
       else
       {
         ?>
         <form name="rev" action="ratingaction.php?id=<?php echo $rows['product_id']; ?>" id="rev" method="POST">
         <textarea id="reviews" name="reviews" rows="4" cols="50" placeholder="write your reviews here" maxlength="50"></textarea><br><br>
         <input type="submit" name="submit" id="submit" value="Submit" class="addtocart-button" style="background-color: green;color: white;width: 80px;height: 50px;border-radius: 25%;border: none">
         </form>
       <?php
     }
       ?>
    </div>

    <div id="dom-target" style="display: none;">
          <input type="hidden" name="product" id="product" value="<?php echo $rows['product_id']; ?>">                                                                  
    <?php
    $price = $rows['product_id'];
         // Again, do some operation, get the output.
        echo htmlspecialchars($price); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
</div>







<center>
<div>
  <h2>Other's Ratings and Reviews </h2>
  <table border='0' class='table table-bordered table-hover table-striped' style='font-size:18px'>
   
<?php 
//echo $id;
$other="SELECT * FROM stars INNER JOIN tb_reg ON stars.login_id=tb_reg.login_id WHERE stars.product_id=$id && stars.login_id NOT IN (SELECT login_id FROM stars WHERE login_id=$lid) " ;
$otherr=$obj->execute($other);
    if(mysqli_num_rows($otherr)>0)
    {
       while($oth=mysqli_fetch_array($otherr))
       {

        ?>

    <tr>
       <td> <label><?php echo $oth['fname']?>&nbsp <?php echo $oth['lname']?> </label></td>
       <td>:</td>
       <td><label><?php echo $oth['rateIndex']?></label>
        <img width="20px" height="20px" style="padding-bottom: 5px" src="star.jpg" />
        <br></td>
      </tr>
      <tr>
        <td><label style="border-style: inset;"><?php echo $oth['review'];?></label></td>
      </tr>

        <?php
       }
    }
    else
        echo "<h4 style='color:green;'>No Ratings yet</h4>";
    //echo $otherrr;
?>
</table>













</div>
</center>

<?php
$rate="SELECT * FROM stars where product_id=$id && login_id=$lid";
   // $obj=new db();
    $ratee=$obj->execute($rate);
    $rateee=mysqli_num_rows($ratee);
   // echo $rateee;
        if (mysqli_num_rows($ratee)>0)
         {
            $ret=mysqli_fetch_array($ratee);
?>
<div id="dom-targe" style="display: none;">
          <input type="hidden" name="product" id="product" value="<?php echo $ret['rateIndex']; ?>">                                                                  
    <?php
    $rates = $ret['rateIndex'];
         // Again, do some operation, get the output.
        echo htmlspecialchars($rates); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
</div>

    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var div = document.getElementById("dom-target");
             var myData = div.textContent;
            // alert(myData);
            var di = document.getElementById("dom-targe");
             var myDat = di.textContent;
             //alert(myDat);
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                //setStars(parseInt(localStorage.getItem('ratedIndex')));
                setStars(parseInt(myDat-1));
                uID = localStorage.getItem('uID');
                //alert(uID);
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               //alert(myData);
               myData=parseInt(myData);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "rating.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex,
                   myData: myData
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'green');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
    <?php
}
else
{
    ?>
    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var div = document.getElementById("dom-target");
             var myData = div.textContent;
            // alert(myData);

        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                //setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
                //alert(uID);
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               //alert(myData);
               myData=parseInt(myData);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "rating.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex,
                   myData: myData
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'green');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
    <?php
}
    ?>
    <span class="addtocart-button">
                                      <center>       
                  <br>
                                        
                                        <input type="submit" name="addtocart" id="addtocart" class="addtocart-button" value="Back" style="background: #2C7BBD;border: none;color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" title="Back to previous page" onclick="window.location='Details.php?id= <?php echo $id; ?>';" />
                                        <br></center> 
                                              </span>
</body>
</html>
