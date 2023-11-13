<?php
session_start();
include "connection.php";

if(isset($_POST['save'])){
    
    $supplier = $_POST['supplier'];
    $product = $_POST['product'];
    $unit = $_POST['unit'];
    $quantity = $_POST['quantity'];
    $unit_cost = $_POST['unit_cost'];
    $total_cost = $_POST['total_cost'];

    $insert = mysqli_query($conn, "insert into `autos` (supplier,product,quantity,unit,unit_cost,total_cost) values 
    ('$supplier','$product','$quantity','$unit','$unit_cost','$total_cost')");

    header("Location:index.php");
}