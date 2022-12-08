<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$c = $_POST['contact'];

// query
$sql = "INSERT INTO customer (customer_name,contact) VALUES (:a,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c));
header("location: customer.php");


?>