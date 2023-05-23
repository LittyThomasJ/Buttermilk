
$(function() {

	
	$("#password_error_message").hide();
	$("#cpassword_error_message").hide();
	$("#cupassword_error_message").hide();

	
	var error_password = false;
	var error_cupassword = false;
	var error_retype_password = false;
	
	//var error_address = false;
	//var pattern = /^[a-zA-Z]*$/;

	$("#currentpass").focusout(function() {

			check_email();
			//alert("err");
		
	});
//first name
	
	//pass
	$("#CreatePassword").focusout(function() {

		check_password();
		
	});
	//conf pass

	$("#CPassword").focusout(function() {

		check_retype_password();
		
	});
	


	function check_email() 
	{

			 $('#currentpass').on('blur', function(){
	 	var email = $('#currentpass').val();
	 	if (email == '') {
	 		error_cupassword = true;
	 		return;
	 	}
	 	$.ajax({
	      url: 'checkpass.php',
	      type: 'post',
	      data: {
	      	'pass_check' : 1,
	      	'currentpass' : email,
	      },
	      success: function(response){
	      	if (response == 'taken' ) {
	          error_cupassword = false;
	           $("#cupassword_error_message").hide();
	          //$('#Email').parent().removeClass();
	          //$('#Email').parent().addClass("form_error");
	          //$('#Email').siblings("span").text('Sorry... Email already taken');
	      	}
	      	else if (response == 'not_taken') {
	      	  error_cupassword = true;
	      	  $("#cupassword_error_message").html("Enter correct password");
				$("#cupassword_error_message").show();
	      	 
	      	}
	      }
	 	});
	  });
	
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
	
	
	$("#create_customer").submit(function() {
		
		error_cupassword =  false;
		error_password =  false;
		error_retype_password = false;
		
		check_email();
		check_password();
		check_retype_password();
		
		if (error_password === false && error_retype_password === false && error_cupassword === false) {
			alert("password edited successfully");
			return true;

		}
		else
		{
			alert("Please fill the form correctly");
			return false;
		}	
	});
});