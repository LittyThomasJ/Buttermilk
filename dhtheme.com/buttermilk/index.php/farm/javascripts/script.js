
$(function() {

	$("#name_error_message").hide();
	$("#email_error_message").hide();
	$("#phone_error_message").hide();
	$("#fat_error_message").hide();
	$("#pic_error_message").hide();
	$("#milk_error_message").hide();
	$("#address_error_message").hide();
	$("#places_error_message").hide();
    
    $("#password_error_message").hide();
	$("#cpassword_error_message").hide();
	var error_name = false;
	var error_email = false;
	var error_phone = false;
	var error_fat = false;
	var error_pic = false;
	var error_milk = false;
	var error_address = false;
	var error_places = false;
	
	var error_password = false;
	var error_retype_password = false;

	
		//alert("error");
//first name
	$("#name").focusout(function() {

		check_name();
		//alert("error");
		
	});
	$("#email").focusout(function() {

		check_email();
		//alert("error");
		
	});
	$("#phone").focusout(function() {

		check_phone();
		//alert("error");
		
	});
	$("#fat").focusout(function() {

		check_fat();
		//alert("error");
		
	});
	$("#pic").focusout(function() {

		check_picture2();
		
		
	});
	$("#milk").focusout(function() {

		check_milk();
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
	
	$("#CreatePassword").focusout(function() {

		check_password();
		//alert("error");
		
	});
	//conf pass

	$("#CPassword").focusout(function() {

		check_retype_password();
		//alert("error");
		
	});
	function check_picture2() {
	if($('#pic').val() != '') {            
      $.each($('#pic').prop("files"), function(k,v){
          var filename = v['name'];    
          var ext = filename.split('.').pop().toLowerCase();
          if($.inArray(ext, ['pdf','doc','docx']) == -1) {
              //alert('Please upload only pdf,doc,docx format files.');
              $("#pic_error_message").html("Upload file with pdf format");
				$("#pic_error_message").show();
				error_pic = true;
              return false;
          }
          else
          {
          	$("#pic_error_message").hide();
          }
      });        
}
else
{
	 $("#pic_error_message").html("Upload file with pdf format");
				$("#pic_error_message").show();
				error_pic = true;
}
	}
	function check_name()
	 {
		var name = $("#name").val();
		if($("#name").val().split(' ').length >= 2)
		{
			
			$("#name_error_message").hide();
			//error_name = false;
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#name_error_message").html("Enter valid name ");
			$("#name_error_message").show();
			error_name = true;
			//$( "#FirstName" ).focus();
		}
	}
	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#email").val())) 
		{
			//$("#email_error_message").hide();
		
				 $('#email').on('blur', function(){

			 	var email = $('#email').val();
			 	
			 	$.ajax({
				      url: 'checkemail.php',
				      type: 'post',
				      data: {
				      	'email_check' : 1,
				      	'Email' : email,
				      },
				      success: function(response){
				      	if (response == 'taken' ) {
				          error_email = true;
				          $("#email_error_message").html("Email already exists");
							$("#email_error_message").show();
				          
				      	}
				      	else if (response == 'not_taken') {
				      	  error_email = false;
				      	  $("#email_error_message").hide();
				      	}
				      }
			 	});
		 });
		}
	 else
	  {
			$("#email_error_message").html("Enter valid email without space");
			$("#email_error_message").show();
			error_email = true;
			
		}
	}
	function check_phone()
	 {
		
		var patter = /^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|800000000|700000000|600000000|500000000)\d{10}$/ ;
		var phone = $("#phone").val();
		
		if(patter.test(phone) && phone != '')
		{
			
			$("#phone_error_message").hide();
			
		}
		else
		{
			$("#phone_error_message").html("Enter valid mobile number without space");
			$("#phone_error_message").show();
			error_phone = true;
			
		}
	}
	function check_fat() {
		
		var fat = $("#fat").val();
		
		if(fat > 3.5 && fat < 7.5)
		{
			
			$("#fat_error_message").hide();
			
		}
		else
		{
			$("#fat_error_message").html("Enter valid fat count");
			$("#fat_error_message").show();
			error_fat = true;
			
		}
	}
	
	function check_milk() {
		
		var milk = $("#milk").val();
		
		if(milk > 1)
		{
			
			$("#milk_error_message").hide();
			
		}
		else
		{
			$("#milk_error_message").html("Enter valid amount of milk in liters");
			$("#milk_error_message").show();
			error_milk = true;
			
		}
	}
	function check_address() {
		
		var address = $("#address").val();
		
		if(address.split(' ').length >= 2)
		{
			
			$("#address_error_message").hide();
			
		}
		else
		{
			$("#address_error_message").html("Enter valid address");
			$("#address_error_message").show();
			error_address = true;
			
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
function check_password() {
	
		var password_length = $("#CreatePassword").val().length;
		
		if(password_length < 6) {
			$("#password_error_message").html("At least 6 characters");
			$("#password_error_message").show();
			error_password = true;
			//$( "#CreatePassword" ).focus();
		} else {
			$("#password_error_message").hide();
		}
	
	}

	function check_retype_password() {
	
		var password = $("#CreatePassword").val();
		var cpassword = $("#CPassword").val();
		
		if(password !=  cpassword) {
			$("#cpassword_error_message").html("Password don't match the above");
			$("#cpassword_error_message").show();
			error_retype_password = true;
			//$( "#CPassword" ).focus();
		} else {
			$("#cpassword_error_message").hide();
		}
	
	}

	$("#form1").submit(function() {
		error_name = false;
		error_email = false;
		error_phone = false;
		error_fat = false;
		error_milk = false;
		error_address = false;
		error_places = false;
		error_pic = false;
		error_password = false;
		error_retype_password = false;
		check_name();
		check_phone();
		check_address();
		check_email();
		check_fat();
		check_milk();
		check_places();
		check_picture2();
		check_password();
		check_retype_password();
		if (error_name === false && error_phone === false && error_address === false && error_email === false && error_milk === false && error_fat === false && error_places === false && error_pic === false && error_password === false && error_retype_password === false) {
			//alert(" Wait for mail ");
			return true;

		}
		else
		{
			alert("Please fill the form correctly");
			return false;
		}	
	});


});