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
	
	$file_name = $_POST['filename'];
	$paper_size = $_POST['papersize'];
	$orientation = $_POST['orientation'];
	$paper_type = $_POST['papertype'];
	$duplex_printing = $_POST['duplexprinting'];
	$output_quality = $_POST['outputquality'];
	$colour_mode = $_POST['colourmode'];
	$pages_per_sheet = $_POST['pagespersheet'];
	$document_binding = $_POST['documentbinding'];
	$copies = $_POST['copies'];
	$schedule = $_POST['schedule'];
	
	$sql = "INSERT INTO order_(file_name,paper_size,orientation,paper_type,duplex_printing,output_quality,colour_mode,pages_per_sheet,document_binding,copies,schedule) VALUES ('$file_name','$paper_size','$orientation','$paper_type','$duplex_printing','$output_quality','$colour_mode','$pages_per_sheet','$document_binding','$copies','$schedule')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'VALUES NOT INSERTED';
		header("refresh:1; url=printsettings.html");
	}
	else
	{
		echo 'VALUES INSERTED';
		header("refresh:1; url=payment.html");
	}
	
	

?>