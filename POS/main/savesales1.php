<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
$dmonth = date('F');
$dyear = date('Y');

if($d=='credit') {
$f = $_POST['due'];
$h = $f-$e;
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,balance,due_date,name,month,year) VALUES (:a,:b,:c,:d,:e,:z,:h,:f,:g,:i,:j)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':h'=>$h,':f'=>$f,':g'=>$cname,':i'=>$dmonth,':j'=>$dyear));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$h = $f-$e;
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,balance,due_date,name,month,year) VALUES (:a,:b,:c,:d,:e,:z,:h,:f,:g,:i,:j)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':h'=>$h,':f'=>$f,':g'=>$cname,':i'=>$dmonth,':j'=>$dyear));
header("location: preview1.php?invoice=$a");
exit();
}
// query



?>