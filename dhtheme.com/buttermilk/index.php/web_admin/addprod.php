<?php
include("check_session.php");
  include("../features/joomla-virtuemart/connection.php");

  //echo $lid;
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
function confirm_alert(node) {
    return confirm("Please click on OK to continue.");
}
</script>
  <script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span> Product / Add Product  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form method="post" action="prodaction.php" name="prodad" id="prodad" enctype="multipart/form-data" accept-charset="UTF-8">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="product" id="product"  style="width:100%" placeholder="Product Name" >
        <span id="product_error_message" style="color:red"></span>
<p>Description</p>
<textarea class="thumbnail form-control" name="desc" id="desc" style="width:100%; height:100px" placeholder="write here..."></textarea>
<span id="desc_error_message" style="color:red"></span>
<p>Product Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
<span id="picture_error_message" style="color:red"></span>
</div>
<p>Nutrients</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture2" class="btn thumbnail" id="picture2" >
<span id="picture2_error_message" style="color:red"></span>
</div>
</div>
<div class="well">
<h3>Details</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="number" class="form-control" name="price" id="price"  placeholder="Price" min=1 max="500">
     
    </div> <span id="price_error_message" style="color:red"></span><br>
<p>No of items</p>
<div class="input-group">
    
      <input type="number" name="items" id="items" class="form-control" placeholder="no. of items" min=1 max="500">
      <span id="items_error_message" style="color:red"></span>
    </div>
    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">
<h3>Details</h3>  
<p>Product type</p>
<select name="cat" class="form-control" id="cat"> 
        <option value="category">CATEGORY</option> 
      <?php
      $sel="select category from tb_category where status='1'";
  $obj=new db();
  $select=$obj->execute($sel);

          if(mysqli_num_rows($select)>0)
          {
          while($row=mysqli_fetch_array($select))
          { 
                //echo "<option value='$row[1]'> $row[1] </option>";
            echo "<option value='" . $row[0] ."'>" . $row[0] ."</option>";
          }
        }
      
      ?>
 </select>
 <span id="cat_error_message" style="color:red"></span>
<br>
<p>Ingredients</p>
<textarea class="thumbnail form-control" name="ing" id="ing" style="width:100%; height:100px" placeholder="write here..."></textarea>
<span id="ing_error_message" style="color:red"></span>
<br>
<p>Tagline</p>
<input type="text" name="tags" id="tags" class="form-control" placeholder="Tagline">
<span id="tags_error_message" style="color:red"></span>
<!--<p>Date of manufacturing</p>
<input type="date" name="dates" id="dates" class="form-control">
<span id="dates_error_message" style="color:red"></span>
<p>Date of expiry</p>
<input type="date" name="datexp" id="datexp" class="form-control">
<span id="datexp_error_message" style="color:red"></span>-->

</div>          
</div>

<div align="center">
    
    <input type="submit" id="submit" name="submit" value="Add product" class="btn btn-success" style="width:150px; height:60px">
    </div>
        </form>
 
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>
<?php

?>