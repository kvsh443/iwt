<?php include_once "../../include/session2.php" ?>
<!DOCTYPE html>
<html lang="en">
	<head>
  		<title></title>
		<style>
		 /* Remove the jumbotron's default bottom margin */ 
 .jumbotron {
    margin-bottom: 0px;
    background-image: url("./images/background.png");
    background-size: 100%;
    color:white;
}
    body{
      background-color: black;
    }

	
#logo {
    height: 150px;
    width: 150px;
    margin-right: 15px;
    float: left;
}
/* Hide the jumbotron's defualt bottom */

@media screen and (max-width: 800px) {
  #tron_hide {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}

 /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
  /* styles for main content (body content) */
.ship{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
}

.text-align-in-ship{
    padding-top: 30px;
}

.breadcrumb > li + li:before {
  content: " > ";
  padding: 0 5px;
  color: #ccc;
}

.comments {
    height: 300px;
    width: 100%;
    margin-top: 40px;
}

.comments textarea {
    font-size: 20px;
    resize: none;
    width: 100%;
    height: 100%;
    border: 1px solid black;
    border-radius: 10px;
}
  /*footer*/
  .footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    border-top: 4px solid black;
    padding-top: 20px;
    margin-top: 30px;
    text-align: center;
}

.footer span {
    float: left;
}

.footer .social {
    float: right;
}

.footer .social h3 {
    margin-bottom: 5px;
    margin-top: 0px;
}

.footer .social img {
    height: 40px;
    width: 40px;
}
body, html{
 height: 100%;
 background: black;
 font-family: 'Lato', sans-serif;
}
</style>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
		<div class="jumbotron" id ="tron_hide">
		<div class = "ship">
		<div class="col-sm-2">
		<img id="logo" src="./images/pagelogo.jpg" alt="Page Logo">
    		</div>	

    		<h1>Rainbow Printers</h1>  
					

    </p>
    		<p>Mission, Vission & Values</p>
		</div>
		</div>

		<nav class="navbar navbar-inverse">

 	 	<div class="container-fluid">

    		<div class="navbar-header">

      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>

      			<a class="navbar-brand" href="#">Rainbow Printers</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">

      			<ul class="nav navbar-nav">

        			<li><a href="index.html">Home</a></li>
        			<li><a href="services.html">Services</a></li>
        			<li class="active"><a href="about-us.html">About Us</a></li>
        			<li><a href="contact-us.html">Contact Us</a></li>
		    		<li><a href="download.html">Download App</a></li>
		    		<li><a href="offers.html">Todays Offer</a></li>
      			</ul>
	  
        		<form class="navbar-form navbar-left" role="search">

        	<div class="input-group">

            		<input type="text" class="form-control" placeholder="Search" name="q">

            	<div class="input-group-btn">

                	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

            	</div>	
        	</div>
        	</form>
    
      			<ul class="nav navbar-nav navbar-right">
	  
        			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>   My Account </a></li>
      			</ul>

    		</div>
  		</div>
		</nav>

		<div class="ship">


 		<div class ="row">

  		<div class ="col-sm-12">
	
  			<ol class="breadcrumb">

    				<li><a href="../../index.html">Home</a></li>
    				<li><a href="index.php">Operator</a></li>   
					<li class="active">Print Settings</li>
     
  			</ol>

  		</div>
 		</div>
		</div>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="styles.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Adding bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<p style="float:right">
					<a href="displayingneth.php"> <input type="button" value="Ongoing Order"></a>
  <?php
$server="localhost";
$user_name="root";
$password="";
$database="operator";

$conn=new mysqli($server,$user_name,$password,$database);

if($conn->connect_error){

die("Connection Failed : " . $conn->connect_error);
}

?> 
<div id="title"><i class="fa fa-tag"></i> New Task Panel</div>
<div class="form">
<center>
  <form method="POST" action="inputme.php" >
  	Order ID :<br/>
    <input type="text" name="oid"><br/><br/>
    Due date :<br/>
	<input type="date" name="dt"><br/><br/>

	<?php 
    $sql = "SELECT * FROM taskpanel";
	$result = mysqli_query($conn,$sql);
    
      if ($result->num_rows > 0) {?>
    Print Properties:<br/><select name="pp">

    <?php while($row = $result->fetch_assoc()) {
		?>
    	<option value=" <?php echo $row['ID']?>">
		<?php echo $row['Print Properties']?> </option>

		<?php }?>
    </select>
    <?php }?>
    <br/><br/>


	Copies:<br/><input type="text" name="copy"><br/><br/>
	

	<?php 
    $sql = "SELECT * FROM taskpanel";
	$result = mysqli_query($conn,$sql);
    
      if ($result->num_rows > 0) {?>
        Task Status:<br/><select name="ts">

    <?php while($row = $result->fetch_assoc()) {
		?>
    	<option value=" <?php echo $row['ID']?>">
		<?php echo $row['Task Status']?> </option>

		<?php }?>
    </select>
    
	
	<?php }?>
    <br /><br>
	
	
	<?php 
	$sql = "SELECT * FROM taskpanel";
	$result = mysqli_query($conn,$sql);
	
      if ($result->num_rows > 0) {?>
        Printer ID:<br/><select name="pid">

    <?php while($row = $result->fetch_assoc()) {
		?>
    	<option value=" <?php echo $row['ID']?>">
		<?php echo $row['Printer ID']?> </option>

		<?php }?>
    </select>
    <?php }?>
    <br /><br>
   

    <button type="submit" class="btn btn-success" name="btnSubmit">SUBMIT</button>
    <button type="reset" class="btn btn-success">RESET</button>
  </form>
</center>
</div>

<div id="bottom">
<input type="hidden">
</div>
  
</body>
<?php
if(isset($_POST["btnSubmit"])){
 
 if(!$conn){
	 echo mysqli_connect_error();
	 	  
 }else{

	 
  $id= $_POST['oid'];
  $date=$_POST['dt'];
  $print=$_POST['pp'];
  $cp= $_POST['copy'];
  $task=$_POST['ts'];
  $pID=$_POST['pid'];
  
  $sql = "INSERT INTO newtp(id,o_id,date,printproperty,
  no_copy,status,pID)VALUES (NULL,'$id', '$date','$print',
  '$cp','$task','$pID')"; 
  
  if(mysqli_query($conn,$sql)==true){
      echo "Inserted successfully";
	  header("location:inputme.php");
    }
    else{
      echo "Error:". $conn->error;
    }
}
}
$conn->close();
?>
<footer class="container-fluid text-center">

  		<p>Footer Text</p> 	
	
  		<div class="footer">
	
  			<span>Copyrights</span>

        	<div class="social">

            		<h3>Follow Us</h3>

            		<img src="./images/fb.png" alt="" >
            		<img src="./images/twitter.png" alt="">
            		<img src="./images/ins.png" alt="">
            		<img src="./images/yt.png" alt="">
        	</div>
		</div>
	
		</footer>
  	<!--jQuery first, then Popper.js, then Bootstrap JS-->	

 	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	
	</body>

</html>
