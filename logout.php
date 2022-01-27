<?php
session_start(); //Start the current session
session_destroy(); //Destroyed
$logout = "Logout Sucessful";

print "<script type='text/javascript'>
		alert('".$logout."');</script>";
sleep(5);
header("location:index.html"); // Move back to login.php

?>