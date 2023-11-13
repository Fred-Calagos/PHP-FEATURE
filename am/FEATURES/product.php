<?php
require_once('connection.php');
 
function get_product($conn , $term){ 
 $query = "SELECT * FROM autos WHERE product LIKE '%".$term."%' ORDER BY product ASC";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getProduct = get_product($conn, $_GET['term']);
 $prodList = array();
 foreach($getProduct as $product){
 $prodList[] = $product['product'];
 }
 echo json_encode($prodList);
}
?>