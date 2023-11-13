<?php
  
// Get the user id 
$product_name = $_REQUEST['product_name'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "admin", "user");
  
if ($product_name !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT supplier,quantity,unit,unit_cost,total_cost FROM userdata WHERE product_name='$product_name'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    $supplier = $row["supplier"];
  
    // Get the first name
    
    $quantity = $row["quantity"];
    $unit = $row["unit"];
    $unit_cost = $row["unit_cost"];
    $total_cost = $row["total_cost"];
}
  
// Store it in a array
$result = array("$supplier", "$quantity", "$unit", "$unit_cost", "$total_cost");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>