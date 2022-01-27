<?php

 $con = mysqli_connect('localhost','root','');

$conn = mysqli_select_db($con,'eprint');

$sql="select * from eprint_service";

$records = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>

<table width ="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>ORDER_</th>
		<th>DATE_</th>
		<th>PRODUCT</th>
		<th>UNIT_PRICE</th>
		<th>QUANTITY</th>
		<th>STATUS</th>
		<th>TOTAL(LKR)</th>
	</tr>

	<?php

	while($eprint_service=mysqli_fetch_assoc($records)){

		echo "<tr>";
		echo "<td>".eprint_service['ORDER_']."</td>";

		echo "<td>".eprint_service['DATE_']."</td>";

		echo "<td>".eprint_service['PRODUCT']."</td>";

		echo "<td>".eprint_service['UNIT_PRICE']."</td>";

		echo "<td>".eprint_service['QUANTITY']."</td>";

		echo "<td>".eprint_service['STATUS']."</td>";

		echo "<td>".eprint_service['TOTAL(LKR)']."</td>";

		
		echo "</tr>";


	}//end while
	?>
</table>
</body>
</html>