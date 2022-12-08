<?php
// configuration
include('../connect.php');

// new data
$id=$_POST['memi'];
$a = $_POST['old'];
$b = $_POST['new'];
$l=$_POST['confirmpassword'];

if($b!=$l){
  die("password dont match");
    }
else {
  $o=($b);
}


// query

$sql = "UPDATE user SET password= '$o' WHERE password = '$a'";
$q = $db->prepare($sql);
$q->execute(array($a,$o,$id));
header("location: ../login.php");

?>