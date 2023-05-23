
$(function() {

	$("#name_error_message").hide();
	$("#lname_error_message").hide();
	
	$("#phone_error_message").hide();

	var error_name = false;
	var error_lname = false;
	
	var error_phone = false;
	//var error_address = false;
	var pattern = /^[a-zA-Z]*$/;
		
//first name
	$("#FirstName").focusout(function() {

		check_username();
		//alert("error");
		
	});
	//last name
	$("#LastName").focusout(function() {

		check_lname();
		//alert("error");
		
	});
	//phone
	$("#Phone").focusout(function() {

		check_phone();
		//alert("err");
		
	});
	
	//email
	
	//firstname
	function check_username() {
		var name = $("#FirstName").val();
		if(pattern.test(name) && name != '')
		{
			
			$("#name_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#name_error_message").html("Enter valid name without number and space ");
			$("#name_error_message").show();
			error_name = true;
			//$( "#FirstName" ).focus();
		}
}
	
		
	
	//last name
	
	function check_phone() {
		//var pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
		//var patter = /^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/;
		var patter =/^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|800000000|700000000|600000000|500000000)\d{10}$/ ;
		var phone = $("#Phone").val();
		if(patter.test(phone) && phone != '')
		{
			
			$("#phone_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#phone_error_message").html("Enter valid phone number without space");
			$("#phone_error_message").show();
			error_phone = true;
			//$( "#Phone" ).focus();
		}
	}
	
	//phone
	function check_lname() {
		var LastName = $("#LastName").val();
		if(pattern.test(LastName) && LastName != '')
		{
			
			$("#lname_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#lname_error_message").html("Enter valid name without space and number");
			$("#lname_error_message").show();
			error_lname = true;
			//$( "#LastName" ).focus();
		}
	}
	
	
	$("#create_customer").submit(function() {
		error_name = false;
		error_lname = false;
		
		error_phone = false;
		check_username();
		check_lname();
		
		check_phone();
		if (error_name === false && error_lname === false && error_phone === false) {
			alert("Edit successful");
			return true;

		}
		else
		{
			alert("Please fill the form correctly");
			return false;
		}	
	});
});