<?php
$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'NOT CONNECTED TO THE SERVER';
	}
	if(!mysqli_select_db($con,'eprint'))
	{
		echo 'DATABASE NOT SELECTED';
	}

$sql = "SELECT * FROM order_ ORDER BY order_id DESC LIMIT 1";
$records = mysqli_query($con,$sql);

$papersize = "SELECT price FROM item WHERE name = (SELECT paper_size FROM order_ ORDER BY order_id DESC LIMIT 1)";
$papersizerec = mysqli_query($con,$papersize);

$orientation = "SELECT price FROM item WHERE name = (SELECT orientation FROM order_ ORDER BY order_id DESC LIMIT 1)";
$orientationrec = mysqli_query($con,$orientation);

$papertype = "SELECT price FROM item WHERE name = (SELECT paper_type FROM order_ ORDER BY order_id DESC LIMIT 1)";
$papertyperec = mysqli_query($con,$papertype);

$duplexprinting = "SELECT price FROM item WHERE name = (SELECT duplex_printing FROM order_ ORDER BY order_id DESC LIMIT 1)";
$duplexprintingrec = mysqli_query($con,$duplexprinting);

$outputquality = "SELECT price FROM item WHERE name = (SELECT output_quality FROM order_ ORDER BY order_id DESC LIMIT 1)";
$outputqualityrec = mysqli_query($con,$outputquality);

$colourmode = "SELECT price FROM item WHERE name = (SELECT colour_mode FROM order_ ORDER BY order_id DESC LIMIT 1)";
$colourmoderec = mysqli_query($con,$colourmode);

$schedule = "SELECT price FROM item WHERE name = (SELECT schedule FROM order_ ORDER BY order_id DESC LIMIT 1)";
$schedulerec = mysqli_query($con,$schedule);

$documentbinding = "SELECT price FROM item WHERE name = (SELECT document_binding FROM order_ ORDER BY order_id DESC LIMIT 1)";
$documentbindingrec = mysqli_query($con,$documentbinding);

$copies = "SELECT copies FROM order_ ORDER BY order_id DESC LIMIT 1";
$copiesrec = mysqli_query($con,$copies);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
  		<title>Check Out</title>

  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	 	<link rel ="stylesheet" href="styles_dam.css">
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

    				<li><a href="index.html">Home</a></li>
    				<li><a href="about-us.html">My Account</a></li>  
					<li><a href="about-us.html">Files</a></li> 
					<li><a href="about-us.html">Print Preview</a></li> 
					<li class="active">Check Out</li>
     
  			</ol>

  		</div>
 		</div>
		</div>
		
		<center>
		
			<h2 id = "h2AU">Check Out</h2>
		
			<div style = "border : 4px solid white;padding-top: 50px;padding-left: 50px;padding-bottom: 50px;padding-right: 20px;margin-top: 20px;margin-bottom: 20px;margin-left: 20px;margin-right: 20px;border-width:medium;border-radius : 8px;">
		
				<table border = 4 bordercolor = "white">
				
					<tr>
						<th class="paytablehead" style = "padding:10px" align="center">File Name</th>
						<th class="paytablehead" style = "padding:10px" align="center">Paper Size</th>
						<th class="paytablehead" style = "padding:10px" align="center">Orientation</th>
						<th class="paytablehead" style = "padding:10px" align="center">Paper Type</th>
						<th class="paytablehead" style = "padding:10px" align="center">Duplex Printing</th>
						<th class="paytablehead" style = "padding:10px" align="center">Output Quality</th>
						<th class="paytablehead" style = "padding:10px" align="center">Colour Mode</th>
						<th class="paytablehead" style = "padding:10px" align="center">Pages Per Sheet</th>
						<th class="paytablehead" style = "padding:10px" align="center">Document Binding</th>
						<th class="paytablehead" style = "padding:10px" align="center">Copies</th>
						<th class="paytablehead" style = "padding:10px" align="center">Schedule</th>
					</tr>
					<?php
						$orders = mysqli_fetch_assoc($records);

							echo "<tr>";
							
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['file_name']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['paper_size']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['orientation']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['paper_type']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['duplex_printing']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['output_quality']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['colour_mode']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['pages_per_sheet']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['document_binding']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['copies']."</td>";
							echo "<td class='paytabledata' style = 'padding:10px' align='center'>".$orders['schedule']."</td>";
							
							echo "</tr>";
						
					?>
				
				</table> <br/>
				
				<p class="paragraph">Print Properties Of Your Project</p> <br/> <br/>
				
				<p style = "color : white;font-weight : bold;font-size : 20px;">Total Amount LKR : 
				
					<?php
				
						$papersizeprice = mysqli_fetch_assoc($papersizerec);
						$orientationprice = mysqli_fetch_assoc($orientationrec);
						$papertypeprice = mysqli_fetch_assoc($papertyperec);
						$duplexprintingprice = mysqli_fetch_assoc($duplexprintingrec);
						$outputqualityprice = mysqli_fetch_assoc($outputqualityrec);
						$colourmodeprice = mysqli_fetch_assoc($colourmoderec);
						$scheduleprice = mysqli_fetch_assoc($schedulerec);
						$copiesprice = mysqli_fetch_assoc($copiesrec);
						$documentbindingprice = mysqli_fetch_assoc($documentbindingrec);
						
						$total = (($papersizeprice['price'] + $orientationprice['price'] + $papertypeprice['price'] + $duplexprintingprice['price'] + $outputqualityprice['price'] + $colourmodeprice['price'] + $scheduleprice['price'] + $documentbindingprice['price']) * $copiesprice['copies']);
						
						echo $total.".00";
				
					?>
				
				</p> <br/> <br/>
				
				<p style = "color : white;font-weight : bold;font-size : 17px;">Pay With</p>
				
				<form>
				
					<select required autofocus style = "font-size : 16px;font-weight : bold;">
						<option value="CreditCard">Credit Card</option>
						<option value="DebitCard">Debit Card</option>
						<option value="EPrintCredit">E-Print Credit</option>
						<option value="Cash">Cash</option>
					</select>
					
					<br/> <br/>
					
					<p style = "color : white;">By clicking "Pay Now" you agree to the Terms of Sales and Privacy Policy </p> <br/>
					
					<a href="index.html" class = "paybutton" style="font-size:17px">Pay Now</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<a href="printsettings.html" class = "paybutton" style="font-size:17px">Cancel</a> <br/> <br/>
					
					
					
				</form>
					
				<p style = "color : white;">Need help : contact support </p> <br/> 
				<p style = "color : white;">We Accept </p> <br/>
					
				<img src="./images/americanexpress.png" alt="American Express" width = 40px>
            	<img src="./images/ecredit.png" alt="E-Credit" width = 40px>
            	<img src="./images/mastercard.jpg" alt="Master Card" width = 50px height = 40px>
           		<img src="./images/paypal.jpg" alt="Pay Pal" width = 40px>
				
				
		
			</div>
			
		</center>
		
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
