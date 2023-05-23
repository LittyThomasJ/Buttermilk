$(function() {

	
	
	$("#quantity_error_message").hide();
	$("#pack_error_message").hide();
	$("#deli_error_message").hide();
	//$("#price").hide();
	$("#price_error_message").hide();

	var error_quantity = false;
	var error_pack = false;
	var error_deli = false;
	var error_price = false;	
//first name
	$("#quantity").focusout(function() {

		check_quantity();
		//alert("error");
		
	});
	$("#pack").focusout(function() {

		check_pack();
		//alert("error");
		
	});
	$("#deli").focusout(function() {
		
//alert(myData);
		check_deli();
		
		
	});
	$("#total").click(function(){
    
  error_quantity = false;
		error_pack = false;
		error_deli = false;
		//error_peri = false;
		check_quantity();
		check_deli();
		check_pack();
		//check_peri();
		if (error_quantity === false && error_pack === false && error_deli === false) {
			var name = $("#deli").val();
			var div = document.getElementById("dom-target");
   			 var myData = div.textContent;
   			 //alert(myData);
   			 var quantity = $("#quantity").val();
			var package = $("#pack").val();
			var quan =parseInt(quantity);
			
			var deli =parseInt(name);
			
			var total=quan * deli * myData;
			
            $("#price_error_message").html("Rs."+total);
			$("#price_error_message").show();

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
	/*$("#peri").focusout(function() {

		check_peri();
		//alert("error");
		
	});*/
		function check_quantity() {
		var name = $("#quantity").val();
		if(name > '0')
		{
			
			$("#quantity_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#quantity_error_message").html("Enter valid quantity ");
			$("#quantity_error_message").show();
			error_quantity = true;
			//$( "#FirstName" ).focus();
		}
}
function check_pack() {
		var name = $("#pack").val();
		if(name != 'pack')
		{
			
			$("#pack_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#pack_error_message").html("Enter valid Package type ");
			$("#pack_error_message").show();
			error_pack = true;
			//$( "#FirstName" ).focus();
		}
}
function check_deli() {
		var name = $("#deli").val();
		
		if(name != 'deli')
		{
			$("#deli_error_message").hide();
			//var delivery = $("#deli").val();
			
		}
		else
		{

			$("#deli_error_message").html("Enter valid Delivery type,quantity,package ");
			$("#deli_error_message").show();
			error_deli = true;
			//$( "#FirstName" ).focus();
		}
}
/*function check_peri() {
		var name = $("#peri").val();
		if(name > '0')
		{
			
			$("#peri_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#peri_error_message").html("Enter valid Period");
			$("#peri_error_message").show();
			error_peri = true;
			//$( "#FirstName" ).focus();
		}
}*/

$("#submit").click(function() {
		error_quantity = false;
		error_pack = false;
		error_deli = false;
		//error_peri = false;
		check_quantity();
		check_deli();
		check_pack();
		//check_peri();
		if (error_quantity === false && error_pack === false && error_deli === false) {
			/*var div = document.getElementById("dom-target");
   			 var myData = div.textContent;
    			//alert(myData);
			var quantity = $("#quantity").val();
			var package = $("#pack").val();
			var delivery = $("#deli").val();
			var quan =parseInt(quantity);
			//alert(quan);
			//var pack =parseInt(package);
			//alert(pack);
			var deli =parseInt(delivery);
			
			var total=quan * deli * myData;
			//alert("Total amount = "total);
			alert("Your Total amount is "+total);*/
			//alert("success");
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