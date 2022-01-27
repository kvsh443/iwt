<?php include_once "../include/session.php" ?>
<html>
<head>
<title>Admin Panel </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin_icon.png">
<h3> Welcome to Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
		<li><a href="index.php" target="_blank"> User list </a></li>
    <li><a href="add.php" target="_blank"> Add Users </a></li>
	
	<li><a href="../logout.php" target="_blank"> Logout </a></li>
 </ul>	
</div>

<div id="data">
<br><br>
<?php

include_once '../database/config.php';

error_reporting(0);
  
  $id= $_POST['delete']; 

  if(!$id)
  {
	  echo "Unauthorized data access detected";
	  header("Location: ../index.html"); 
  }
  else
  {
	 $result=mysqli_query($conn,"SELECT * FROM users_table WHERE user_id ='$id'");
	 while($row=mysqli_fetch_assoc($result))
    {
		echo '<form method ="GET" action = "delete1.php">';
		echo 'User ID : ' .$row['user_id'].' <br/> Name : '.$row['name'].' is about to get deleted are you sure ? <br/> <br/>';
		echo '<input type="hidden" name = "id" value="'.$id.'">' ;
		echo '<input class="btn btn-danger" type="submit" name="conform" value="Conform"> &nbsp;&nbsp;&nbsp 
		<input type="button" class="btn btn-success " value="Cancel" onclick="history.back();" />';
		echo '</form>';
	
	mysqli_close($conn);
	}
  }
?>
</div>

	<?php include '../includes/footer.php';?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>