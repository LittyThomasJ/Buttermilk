
$(function() {

	$("#product_error_message").hide();
	$("#desc_error_message").hide();
	$("#picture_error_message").hide();
	$("#picture2_error_message").hide();
	$("#price_error_message").hide();
	$("#items_error_message").hide();
	$("#cat_error_message").hide();
	$("#ing_error_message").hide();
	$("#tags_error_message").hide();
//$("#dates_error_message").hide();
//$("#datexp_error_message").hide();

	var error_product = false;
	var error_desc = false;
	//var error_password = false;
	var error_picture = false;
	var error_picture2 = false;
	var error_price = false;
	var error_items = false;
	var error_cat = false;
	var error_ing = false;
	var error_tags = false;
	//var error_dates = false;
	//var error_datexp = false;
	//var error_address = false;
	var pattern = /^[a-zA-Z]*$/;
		
//first name
	$("#product").focusout(function() {

		check_username();
	//alert("error");
		
	});
	//last name
	$("#desc").focusout(function() {

		check_desc();
		//alert("error");
		
	});
	//phone
	$("#picture").focusout(function() {

		check_picture();
		//alert("err");
		
	});
	
	//email
	$("#picture2").focusout(function() {

		check_picture2();
		//alert("error");
	});
	//pass
	$("#price").focusout(function() {

		check_price();
		//alert("error");
	});
	//conf pass

	$("#items").focusout(function() {

		check_items();
		//alert("error");
	});
	
	$("#cat").focusout(function() {

		check_cat();
		//alert("error");
	});
	$("#ing").focusout(function() {

		check_ing();
		//alert("error");
	});
	$("#tags").focusout(function() {

		check_tags();
		//alert("error");
	});
	/*
	$("#dates").focusout(function() {

		check_dates();
		//alert("error");
	});
	$("#datexp").focusout(function() {

		check_datexp();
		//alert("error");
	});*/
	
	
	//firstname
	function check_username() {

		//var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	var patt = /^[a-zA-Z]*$/;
	var proi = $('#product').val();
		if(patt.test($("#product").val()) && proi != '') 
		{
			//$("#email_error_message").hide();
				
				 $('#product').on('blur', function(){
		 	var email = $('#product').val();
		 	if (email == '') {
		 		error_product = true;
		 		return;
		 	}
		 	$.ajax({
		      url: 'checkproduct.php',
		      type: 'post',
		      data: {
		      	'product_check' : 1,
		      	'product' : email,
		      },
		      success: function(response){
		      	if (response == 'taken' ) {
		          error_product = true;
		          $("#product_error_message").html("Product already exists");
					$("#product_error_message").show();
		          //$('#Email').parent().removeClass();
		          //$('#Email').parent().addClass("form_error");
		          //$('#Email').siblings("span").text('Sorry... Email already taken');
		      	}
		      	else if (response == 'not_taken') {
		      	  error_product = false;
		      	  $("#product_error_message").hide();
		      	}
		      }
		 	});
		 });

	} 
	else {
			$("#product_error_message").html("Enter valid product name");
			$("#product_error_message").show();
			error_product = true;
			//$( "#Email" ).focus();
		}
		/*var prod = $("#product").val();
		var patt = /^[a-zA-Z1-9]*$/;
		if(prod != '')
		{
					$('#product').on('blur', function(){
					 	//var email = $('#product').val();
					 	var product = $("#product").val();
					 	if (product == '') {
					 		error_product = true;
					 		return;
					 	}
						 	$.ajax({
						      url: 'checkproduct.php',
						      type: 'post',
						      data: {
						      	'product_check' : 1,
						      	'product' : product,
						      },
						      success: function(response){
						      	if (response == 'taken' ) {
						          error_product = true;
						          $("#product_error_message").html("Product already exists");
									$("#product_error_message").show();
						          //$('#Email').parent().removeClass();
						          //$('#Email').parent().addClass("form_error");
						          //$('#Email').siblings("span").text('Sorry... Email already taken');
						      	}
						      	else if (response == 'not_taken') {
						      	  error_product = false;
						      	  $("#product_error_message").hide();
						      	}
						      }
						 	});
				 	});
			//$("#product_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#product_error_message").html("Enter valid product name without space");
			$("#product_error_message").show();
			error_product = true;
			//$( "#FirstName" ).focus();
		}*/
}
function check_desc() {
		var name = $("#desc").val();
		if(name != '')
		{
			
			$("#desc_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#desc_error_message").html("Enter valid description");
			$("#desc_error_message").show();
			error_desc = true;
			//$( "#FirstName" ).focus();
		}
}
function check_picture() {
		

	if($('#picture').val() != '') {            
      $.each($('#picture').prop("files"), function(k,v){
          var filename = v['name'];    
          var ext = filename.split('.').pop().toLowerCase();
          if($.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
              //alert('Please upload only pdf,doc,docx format files.');
              $("#picture_error_message").html("Upload file with 'jpg', 'jpeg', 'png' format");
				$("#picture_error_message").show();
				error_picture = true;
              return false;
          }
          else
          {
          	$("#picture_error_message").hide();
          }
      });        
}
else
{
	 $("#picture_error_message").html("Upload file with 'jpg', 'jpeg', 'png' format");
				$("#picture_error_message").show();
				error_picture = true;
}
}
	//last name
	
function check_picture2() {

	if($('#picture2').val() != '') {            
      $.each($('#picture2').prop("files"), function(k,v){
          var filename = v['name'];    
          var ext = filename.split('.').pop().toLowerCase();
          if($.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
              //alert('Please upload only pdf,doc,docx format files.');
              $("#picture2_error_message").html("Upload file with 'jpg', 'jpeg', 'png' format");
				$("#picture2_error_message").show();
				error_picture2 = true;
              return false;
          }
          else
          {
          	$("#picture2_error_message").hide();
          }
      });        
}
else
{
	 $("#picture2_error_message").html("Upload file with 'jpg', 'jpeg', 'png' format");
				$("#picture2_error_message").show();
				error_picture2 = true;
}
		
	}
	function check_price() {
		var name = $("#price").val();
		if(name != '' && name <= 500 && name >= 1)
		{
			
			$("#price_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#price_error_message").html("Enter valid price");
			$("#price_error_message").show();
			error_price = true;
			//$( "#FirstName" ).focus();
		}
}
function check_items() {
		var name = $("#items").val();
		var patter = /^[0-9]*$/;
		if(patter.test(name) && name != '' && name <= 500 && name >= 1)
		{
			
			$("#items_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#items_error_message").html("Enter valid number of items");
			$("#items_error_message").show();
			error_items = true;
			//$( "#FirstName" ).focus();
		}
}
function check_cat() {
		var name = $("#cat").val();
		if(name != 'category')
		{
			
			$("#cat_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#cat_error_message").html("Enter valid category");
			$("#cat_error_message").show();
			error_cat = true;
			//$( "#FirstName" ).focus();
		}
}
 function check_ing() {
		var name = $("#ing").val();
		if(name != '')
		{
			
			$("#ing_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#ing_error_message").html("Enter valid ingredients");
			$("#ing_error_message").show();
			error_ing = true;
			//$( "#FirstName" ).focus();
		}
}
function check_tags() {
		var name = $("#tags").val();
		if(name != '')
		{
			
			$("#tags_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#tags_error_message").html("Enter valid tagline");
			$("#tags_error_message").show();
			error_tags = true;
			//$( "#FirstName" ).focus();
		}
}
/*
function check_datexp() {
		var startDate = new Date($('#dates').val());
var endDate = new Date($('#datexp').val());

if (Date.parse(startDate) < Date.parse(endDate)){
$("#datexp_error_message").hide();
}
else
{
	$("#datexp_error_message").html("Enter date greater than manufacturing date");
			$("#datexp_error_message").show();
			error_datexp = true;
}
}*/


	
	$("#prodad").submit(function() {
		//alert("fd");
		error_product = false;
		error_desc = false;
		error_picture = false;
		error_picture2 = false;
		error_price = false;
		error_items = false;
		error_cat = false;
		error_ing = false;
		error_tags = false;
		check_username();
		check_desc();
		check_picture();
		check_picture2();
		check_price();
		check_items();
		check_cat();
		check_ing();
		check_tags();
		
		//if (error_product === false && error_desc === false && error_picture === false && error_picture2 === false && error_price === false && error_items === false && error_cat === false && error_ing === false && error_tags === false) 
		if (error_product === false && error_desc === false && error_picture === false && error_picture2 === false && error_price === false && error_items === false && error_cat === false && error_ing === false && error_tags === false)
		{
			alert("Success");
			return true;

		}
		else
		{
			alert("Please fill the form correctly");
			return false;
		}
	});
});