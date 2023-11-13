<?php
//requested term
$product = $_REQUEST['product'];

//define connection
$conn = mysqli_connect("localhost","root","root","exercises");
if ($product !== "") {
	
	$query = mysqli_query($conn, "SELECT supplier, unit, quantity, unit_cost, total_cost FROM autos 
    WHERE product ='$product'");
	$row = mysqli_fetch_array($query);

	$supplier = $row["supplier"];
	$unit = $row["unit"];
	$quantity = $row['quantity'];
	$unit_cost = $row['unit_cost'];
	$total_cost = $row['total_cost'];

}

// Store it in a array
$result = array("$supplier", "$unit", "$quantity","$unit_cost","$total_cost");
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;

?>
