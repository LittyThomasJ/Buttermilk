$(function() {

	
	
	$("#fullname_error_message").hide();
	$("#phone_error_message").hide();
	$("#address_error_message").hide();
	$("#places_error_message").hide();
	$("#payment_error_message").hide();

	var error_fullname = false;
	var error_phone = false;
	var error_address = false;
	var error_places = false;
	var error_payment = false;
	var pattern = /^[a-zA-Z]*$/;
	$("#fullname").focusout(function() {

		check_fullname();
		//alert("error");
		
	});
	$("#Phone").focusout(function() {

		check_phone();
		//alert("error");
		
	});
	$("#address").focusout(function() {

		check_address();
		//alert("error");
		
	});
	$("#places").focusout(function() {

		check_places();
		//alert("error");
		
	});
	$("#payment").focusout(function() {

		check_payment();
		//alert("error");
		
	});
	function check_fullname() {
		var name = $("#fullname").val();
		if($("#fullname").val().split(' ').length >= 1 && name != '')
		{
			
			$("#fullname_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#fullname_error_message").html("Enter valid name ");
			$("#fullname_error_message").show();
			error_fullname = true;
			//$( "#FirstName" ).focus();
		}
}
function check_phone() {
		//var pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
		//var patter = /^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/;
		var patter = /^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|800000000|700000000|600000000|500000000)\d{10}$/ ;
		var phone = $("#Phone").val();
	
		if(patter.test(phone) && phone != '')
		{
			
			$("#phone_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#phone_error_message").html("Enter valid mobile number without space");
			$("#phone_error_message").show();
			error_phone = true;
			//$( "#LastName" ).focus();
		}
	}
	function check_address() {
	
		//var patt = /^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/;
		var add = $("#address").val();
		if($("#address").val().split(' ').length >= 1)
		{
			
			$("#address_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#address_error_message").html("Enter address information");
			$("#address_error_message").show();
			error_address = true;
			//$( "#LastName" ).focus();
		}
	}
	function check_places() {
		var name = $("#places").val();
		if(name != 'place')
		{
			
			$("#places_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#places_error_message").html("Enter valid Places ");
			$("#places_error_message").show();
			error_places = true;
			//$( "#FirstName" ).focus();
		}
}
	function check_payment() {
		var name = $("#payment").val();
		if(name != 'pay')
		{
			
			$("#payment_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#payment_error_message").html("Enter valid payment ");
			$("#payment_error_message").show();
			error_payment = true;
			//$( "#FirstName" ).focus();
		}
}
$("#form1").submit(function() {
		error_fullname = false;
		error_phone = false;
		error_address = false;
		error_places = false;
		error_payment = false;
		check_fullname();
		check_phone();
		check_address();
		check_places();
		check_payment();
		if (error_fullname === false && error_phone === false && error_address === false && error_places === false && error_payment === false) {
			//alert(" Successful");
			return true;

		}
		else
		{
			//alert("Please fill the form correctly");
			Swal.fire(
  'Please fill the form correctly',
  'Otherwise not able to Move on'
  
)
			return false;
		}	
	});

});

