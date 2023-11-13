<?php
require_once('connection.php');
 
function get_unit($conn , $term){ 
 $query = "SELECT * FROM unit WHERE unitname LIKE '%".$term."%' ORDER BY unitname ASC";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getUnit = get_unit($conn, $_GET['term']);
 $unitList = array();
 foreach($getUnit as $unit){
 $unitList[] = $unit['unitname'];
 }
 echo json_encode($unitList);
}
?>