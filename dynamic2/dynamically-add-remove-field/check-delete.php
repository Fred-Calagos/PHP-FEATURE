<?php
// author: axlmulat.com
require_once("config.php"); 

if(isset($_POST['submit'])) {
	$id_array = $_POST['data']; // array na
	$id_count = count($_POST['data']); // count array
	
	for($i=0; $i < $id_count; $i++) {
		$id = $id_array[$i];
		$query = mysqli_query($con, "DELETE FROM `tblskills` WHERE `id` = '$id'");
		if(!$query) { die(mysqli_connect_error()); }
	}
	
	header("Location: index.php");
	
}
?>