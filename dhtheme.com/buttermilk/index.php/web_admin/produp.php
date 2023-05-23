<?php
include("check_session.php");
include("../features/joomla-virtuemart/connection.php");
//session_start();
//$lid=$_SESSION['lid'];
//echo $lid;
$id=$_GET['id'];
//echo $id;
//if($lid>0)
//{
	$sel="SELECT * FROM tb_product where product_id=$id";
	$obj=new db();
	$select=$obj->execute($sel);
	$row=mysqli_fetch_array($select);
	$img=$row['picture2'];
	//echo $img;
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
        <form method="post" action="editpro.php?id= <?php echo $row['product_id']; ?>" name="prodad" id="prodad" enctype="multipart/form-data" accept-charset="UTF-8">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="product" id="product"  style="width:100%" value="<?php echo $row['product'];?>" required>
        <span id="product_error_message" style="color:red"></span>
<p>Description</p>
<textarea class="thumbnail form-control" name="desc" id="desc" style="width:100%; height:100px"><?php echo $row['descr'];?></textarea>
<span id="desc_error_message" style="color:red"></span>
<p>Product Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" value="<?php echo $row['picture']; ?>" required>

<span id="picture_error_message" style="color:red"></span>
</div>
<p>Nutrients</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture2" class="btn thumbnail" id="picture2" value="<?php echo $row['picture2'];?>" required>
<span id="picture2_error_message" style="color:red"></span>
</div>
</div>
<div class="well">
<h3>Details</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="number" class="form-control" name="price" id="price"  placeholder="Price" value="<?php echo $row['price'];?>">
     
    </div> <span id="price_error_message" style="color:red"></span><br>
<p>No of items</p>
<div class="input-group">
    
      <input type="number" name="items" id="items" class="form-control" placeholder="no. of items" value="<?php echo $row['items'];?>">
      <span id="items_error_message" style="color:red"></span>
    </div>
    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">
<h3>Category</h3>  
<p>Product type</p>
<?php
$cat_id=$row['cat_id'];
$selll="select category from tb_category where status='1' && cat_id=$cat_id";
$selecttt=$obj->execute($selll);
$rowss=mysqli_fetch_array($selecttt);

?>
<select name="cat" class="form-control" id="cat" > 
        <option value="category">CATEGORY</option> 
      <?php
      $sell="select category from tb_category where status='1'";
  $objj=new db();
  $selectt=$objj->execute($sell);

          if(mysqli_num_rows($selectt)>0)
          {
          while($rows=mysqli_fetch_array($selectt))
          { 
                //echo "<option value='$row[1]'> $row[1] </option>";
           // echo "<option value='" . $rows[0] ."'>" . $rows[0] ."</option>";?>
            <option value="<?php echo $rows['0']; ?>"<?php if($rowss['category']==$rows['0']) echo 'selected="selected"'; ?>><?php echo $rows['0']; ?></option>
            <?php
          }
        }
      
      ?>
 </select>
 <span id="cat_error_message" style="color:red"></span>
<br>
<p>Ingredients</p>
<textarea class="thumbnail form-control" name="ing" id="ing" style="width:100%; height:100px" ><?php echo $row['ing'];?></textarea>
<span id="ing_error_message" style="color:red"></span>
<br>
<p>Tagline</p>
<input type="text" name="tags" id="tags" class="form-control" value="<?php echo $row['tags'];?>">
<span id="tags_error_message" style="color:red"></span>
</div>          
</div>

<div align="center">
    
    <input type="submit" id="submit" name="submit" value="Edit product" class="btn btn-success" style="width:150px; height:60px" onclick="return confirm_alert(this);">
    </div>
        </form>
 
	</div>
</div></div></div>
<?php 
include("include/js.php"); ?>
</body>
</html>