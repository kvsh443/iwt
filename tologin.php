<?php

include "./database/config.php";
if(isset($_POST['submit'])){
    //$usr = mysqli_real_escape_string($_POST['username']); 
    //$pas = hash('sha256', mysqli_real_escape_string($_POST['password'])); //hasing is disabled
    $usr = ($_POST['username']);
	$pas = ($_POST['password']);
    $sql = ("SELECT * FROM users_table  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
	 $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){ 
        $row = mysqli_fetch_assoc($result); 
        session_start(); 
        $_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role'];
        $_SESSION['logged'] = TRUE;
			if($_SESSION['role'] == "admin"){
				header("Location: ./admin/index.php");
			}
			elseif($_SESSION['role'] == "operator")
			{
				
			header("Location:./admin/operator/"); 
			exit; 
			}
			elseif($_SESSION['role'] == "customer")
			{
			header("Location:./my-account.html"); 
			exit;
			}
    }else{ 
        header("Location: ilogin.html"); 
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page
    header("Location: index.html");     
    exit; 
} 
    
?>