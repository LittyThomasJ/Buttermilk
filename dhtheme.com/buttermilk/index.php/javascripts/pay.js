$(function() {

	
	
	$("#card_error_message").hide();
	$("#cardex_error_message").hide();
	$("#cvv_error_message").hide();
	$("#name_error_message").hide();
	var error_card = false;
	var error_cardex = false;
	var error_cvv = false;
	var error_name = false;
	$("#name").focusout(function() {

				//check_fullname();
		//alert("error");
		
			});
	$("#cardNumber").focusout(function() {

				//check_cardnum();
		//alert("error");
		
			});

	$("#cardExpiry").focusout(function() {

				//check_cardex();
		//alert("error");
		
			});
	$("#cardCVV").focusout(function() {

				//check_cardcvv();
		//alert("error");
		
			});
	function check_fullname() {
		var name = $("#name").val();
		if($("#name").val().split(' ').length >= 2)
		{
			
			$("#name_error_message").hide();
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
/*

function check_cardnum() {
		var card = $("#cardNumber").val();
		var patter = /^[0-9]{6}[\*]{6}[0-9]{4}$/ : /^[0-9]{16}$/;
		if(patter.test(card) && card != '')
		{
			
			$("#card_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#card_error_message").html("Enter valid cardNumber");
			$("#card_error_message").show();
			error_card = true;
			//$( "#FirstName" ).focus();
		}
}*/
	 });