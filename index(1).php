
	<?php require_once('transaction.php');
	$query = "SELECT ORDER,DATE_,PRODUCT,UNIT_PRICE,QUANTITY,STATUS,TOTAL from eprint_service";

	$result=mysqli_query($conn,$query);

	if ($result){
		echo "Query Successful";
		$table = "<table>" ;
		$table .= "<tr><th>ORDER_</th><th>DATE_</th><th>PRODUCT</th><th>UNIT_PRICE</th><th>QUANTITY</th><th>STATUS</th>TOTAL</th></tr>";

		while($record = mysqli_fetch_assoc($result)) {
			$table .= "<tr>";
			$table .= "<td>". $record['ORDER_']."</td>";
			$table .= "<td>". $record['DATE_']."</td>";
			$table .= "<td>". $record['PRODUCT']."</td>";
			$table .= "<td>". $record['UNIT_PRICE']."</td>";
			$table .= "<td>". $record['QUANTITY']."</td>";
			$table .= "<td>". $record['STATUS']."</td>";
			$table .= "<td>". $record['TOTAL(LKR)']."</td>";
			$table .= "</tr>";
		}

		$table .= "</table>";
		
	
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Query</title>
</head>
<body>

	<?php echo $result ;?> 
	
</body>
</html>
<? php mysqli_close($conn); ?>



