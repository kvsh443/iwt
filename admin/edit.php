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
<center><img src="../images/avatar1_big@2x.png">
<h3>Admin Panel</h3></center>
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
  
  $id= $_POST['edit'];
  
  if(!$_POST['submit'])
  {
	  echo "Unauthorized data access detected";
	  header("Location: ../index.html"); 
  }
  else
  {
	 $result=mysqli_query($conn,"SELECT * FROM users_table WHERE user_id ='$id'");
	 while($row=mysqli_fetch_assoc($result))
    {
		echo '<form method = "POST" action="add.php">';
        echo '<label> User ID :</label> <input id ="blacktable" type="text" name = "UserID" value='.$row['user_id'].' disabled ><br/><br/>';
		echo '<label> Name : </label> <input id ="blacktable" type="text" name = "Name" value='.$row['name'].'><br/><br/>';
		echo '<label> Username : </label> <input id ="blacktable" type="text" name = "Username" value='.$row['username'].'><br/><br/>';
		echo '<label> Password : </label> <input id ="blacktable" type="text" name = "Password" value='.$row['password'].'><br/><br/>';
		echo '<label> Email : </label> <input id ="blacktable" type="text" name = "Email" value='.$row['email'].'><br/><br/>';
		echo '<label> Role : </label> <input id ="blacktable" type="text" name = "Role" value='.$row['role'].'><br/><br/>';
		echo '<input type="button" class="btn btn-warning " value="Cancel" onclick="history.back();" />';
    }
	echo '<input class="btn btn-primary " type="submit" name="submit" value="Add"/>
			</form>';
	mysqli_close($conn);
  }

?>
</div>

	<?php include '../includes/footer.php';?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>