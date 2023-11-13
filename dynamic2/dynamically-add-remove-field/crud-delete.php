<?php
session_start();
include "config.php";
$id=$_GET['id'];
$name = $_GET['name'];
mysqli_query($con, "delete from `tblskills` where id = '$id'");

$_SESSION['deleted'] = "You have successfully deleted product $name";
header('location:index.php');
   ?>