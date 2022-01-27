<?php include_once "../include/session.php" ?>
<html>
<head>
<title>Admin Panel </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="../images/avatar1_big@2x.png">
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

<center><h1>Current Users</h1></center>

    <div class="row ">
      <div class="col-md-12">
        <table class="table table-bordered ">
          <thead id="whitetable">
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
              <th>Role</th>
			  <th> </th>
            </tr>
          </thead>
          <tbody>
            <?php
			include "../database/config.php";
            $result=mysqli_query($conn,"SELECT * FROM users_table");
			
            while ($row=mysqli_fetch_array($result)) {
			  $_POST['id'] = $row['user_id'];
              echo '<tr id="whitetable">';
              echo '<td>' . $row['user_id'] . '</td>';
              echo '<td>' . $row['name'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td>' . $row['username'] . '</td>';
              echo '<td>' . $row['password'] . '</td>';
			  echo '<td>' . $row['role'] . '</td>';
              echo '<td >' .
			  '<form class="cellinline" method = "POST" action= "edit.php">'.
			  '<input type="hidden" name="edit" value="' . $row['user_id'] . '">'.
			  '<input class="btn btn-primary " type="submit" name="submit" value="Edit">'.
              '</form>'
			  ."&nbsp;&nbsp;&nbsp;". 
			  '<form class="cellinline" method = "POST" action= "delete.php">'.
			  '<input type="hidden" name="delete" value="' . $row['user_id'] . '">'.
			  '<input class="btn btn-danger" type="submit" name="submit" value="Delete">'
              .'</form>'
			  . '</td>';
              echo '</tr>';
			  
            }
            mysqli_close($conn);
            ?>
          </tbody>
        </table>
      </div>
    </div>
</div>
	<?php include './includes/footer.php';?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>