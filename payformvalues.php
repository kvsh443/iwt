<?php
	
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'NOT CONNECTED TO THE SERVER';
	}
	if(!mysqli_select_db($con,'eprint'))
	{
		echo 'DATABASE NOT SELECTED';
	}
	
	$full_name = $_POST['fullname'];
	$name_on_card = $_POST['nameoncard'];
	$b_address_line_1 = $_POST['baddressline1'];
	$card_number = $_POST['cardnumber'];
	$b_address_line_2 = $_POST['baddressline2'];
	$expiry = $_POST['expiry'];
	$cvv = $_POST['cvv'];
	$b_city = $_POST['bcity'];
	$b_state = $_POST['bstate'];
	$c_address_line_1 = $_POST['caddressline1'];
	$b_zip = $_POST['bzip'];
	$b_country = $_POST['bcountry'];
	$c_address_line_2 = $_POST['caddressline2'];
	$c_city = $_POST['ccity'];
	$c_state = $_POST['cstate'];
	$c_zip = $_POST['czip'];
	$c_country = $_POST['ccountry'];
	
	$sql = "INSERT INTO                           payment(full_name,b_address_line_1,b_address_line_2,b_city,b_country,b_state,b_zip,name_on_card,card_number,expiry_date,cvv_number,c_address_line_1,c_address_line_2,c_country,c_state,c_city,c_zip)VALUES('$full_name','$b_address_line_1','$b_address_line_2','$b_city','$b_country','$b_state','$b_zip','$name_on_card','$card_number','$expiry','$cvv','$c_address_line_1','$c_address_line_2','$c_country','$c_state','c_city','$c_zip')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'VALUES NOT INSERTED';
		header("refresh:1; url=payment.html");
	}
	else
	{
		echo 'VALUES INSERTED';
		header("refresh:1; url=checkout.php");
	}
	
	

?>