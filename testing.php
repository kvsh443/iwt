<?php
	
	$con = mysqli_connect('127.0.0.1:3307','root','');
	
	if(!$con)
	{
		echo 'NOT CONNECTED TO THE SERVER';
	}
	if(!mysqli_select_db($con,'testrun'))
	{
		echo 'DATABASE NOT SELECTED';
	}
	
	$name = $_POST['name'];
	
	$sql = "INSERT INTO runtest(name) VALUES ('$name')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'VALUES NOT INSERTED';
	}
	else
	{
		echo 'VALUES INSERTED';
	}
	
	/*header("refresh : 2; url = testing.html");*/

?>