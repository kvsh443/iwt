<?php include_once "../include/session.php" ?>
<?php
 
include_once '../database/config.php';

error_reporting(0);

  $id = $_POST['UserID'];
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $role = $_POST['Role'];
  
if(!$_POST['submit']){
	
	echo '<html>
<head>
<title>Admin Panel </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="../images/avatar1_big@2x.png">
<h3> Admin Panel</h3></center>
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
   
	<h2>Add New Users</h2>
		<form action="add.php" method="POST">
			<label> Name: </label> <input id="blacktable" type="text" name="Name" value="" required><br><br>
			<label> Email: </label> <input id="blacktable" type="email" name="Email" value="" required><br><br>
			<label> Username : </label> <input id="blacktable" type="text" name="Username" value="" required><br><br>
			<label> Password: </label> <input id="blacktable" type="password" name="Password" value="" required><br><br>
			<label> Role:  </label> <input id="blacktable" type="text" name="Role" value="" required><br><br>
	<br>
			<input  class="btn btn-primary " id="blacktable" type="submit" name="submit" value="add"/></center>
		<input type="button" class="btn btn-success " value="Cancel" onclick="self.close();" />
		</form>
</body>

</html>';
  
}

else {

$sql = "INSERT INTO users_table (user_id,username,password,role,name,email)
VALUES ('$id','$username','$password','$role','$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
	sleep(5);
	header("Location: ./index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

