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

input[type=button]{
      border: 2px solid transparent;
      background: #BBB9B9;
      color: white;
      font-size: 16px;
      line-height: auto;
      width: auto;
      padding: auto 0;
      border-radius: 3px; 
}
input[type=button]:hover{
 background: #2980b9;
}	
	</style>

  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  		<link rel="styles_neth" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
		<div class="jumbotron" id ="tron_hide">
		<div class = "ship">
		<div class="col-sm-2">
		<img id="logo" src="./images/pagelogo.jpg" alt="Page Logo">
    		</div>	

    		<h1>Rainbow Printers</h1>      
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
		
<p style="float:right">
					<a href="inputme.php"> <input type="button" value="To Printer"></a>
    		

<html>
<head>

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'operator'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM newtp';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

	<title>Operator's Dashboard</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ff0066;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
		#title {
	font-size: 45px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight:400;
	color:orange;
	text-shadow: 1.2px 1.2px #000;
	text-align:center;
	background-color:#FFD83F;
	padding-top:10px;
	padding-bottom:10px;
	}
	
	#background {
	font-size: 20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight:400;
	color:#333;
	background-color:#FAF772;
	}

	</style>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Adding bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	<div id="title"><i class="fa fa-print"></i> Task Panel</div>
    
<div id="background">
	<table class="data-table">
		<caption class="title">Table of information</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Order ID</th>
				<th>Due date</th>
				<th>Print Properties</th>
				<th>Copies</th>
				<th>Task Status</th>
				<th>Printer ID</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['o_id'].'</td>
					<td>'. date('F d, Y', strtotime($row['date'])) . '</td>
					<td>'.$row['printproperty'].'</td>
					<td>'.$row['no_copy'].'</td>
					<td>'.$row['status'].'</td>
					<td>'.$row['pID'].'</td>
				</tr>';
			
		}?>
		</tbody>
	</table>
	<br/><br/>


<div class="container">
  <h2 align="left">Ink Level</h2>
   
  <p>Black</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%" text-align="center">
      70%
    </div>
  </div>
</div>

<div class="container">
  <p>Color</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% 
    </div>
  </div>

</body>
</html>

<h4 align="left"><br/><br/>Print Properties:</h4>
<h5 align="left">1. A4|PT|Official|0|Normal|Color|1|0<br/>2. A4|MS|Normal|0|Normal|Color|1|0<br/>3. A4|LS|Normal|0|Normal|Gray|1|0<br/><br/></h5>

<h4 align="left">Task Status:</h4>
<h5 align="left">1. Complete<br/>2. Printing<br/>3. Scheduled<br/><br/></h5>

<h4 align="left">Printer ID:</h4>
<h5 align="left">1. HP-INJECT3122<br/>2. HP-INJECT3002<br/>3. HP-INJECT3102<br/><br/></h5>


</div>
</body>
</html>
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

