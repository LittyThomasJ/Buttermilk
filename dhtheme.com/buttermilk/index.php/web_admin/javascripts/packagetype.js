
$(function() {

	$("#product_error_message").hide();
	
	var error_product = false;
	
	//var error_address = false;
	var pattern = /^[a-zA-Z]*$/;
		
//first name
	$("#category").focusout(function() {

		check_username();
	//alert("error");
		
	});
	//last name
	
	//firstname
	function check_username() {
		var name = $("#category").val();
		if(name != '')
		{
			
			$("#product_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#product_error_message").html("Enter valid package type");
			$("#product_error_message").show();
			error_product = true;
			//$( "#FirstName" ).focus();
		}
}
	

	
	$("#cat").submit(function() {
		//alert("fd");
		error_product = false;
		
		check_username();
		
		
		//if (error_product === false && error_desc === false && error_picture === false && error_picture2 === false && error_price === false && error_items === false && error_cat === false && error_ing === false && error_tags === false) 
		if (error_product === false)
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