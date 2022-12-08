<?php
// configuration
include('../connect.php');

// new data
$id=$_POST['memi'];
$a = $_POST['prev'];
$b = $_POST['new'];



// query

$sql = "UPDATE products SET price= '$b' WHERE price = '$a'";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: products.php");

?>