<?php
session_start();
include('../connect.php');
$a = $_POST['unit_name'];
// query
$sql = "INSERT INTO unit(unit_name) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
header("location: unit.php");


?>