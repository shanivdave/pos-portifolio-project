<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['unit_name'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $d-$g;
$i = $_POST['gen'];
$k = $_POST['qty_sold'];
$n = $f-$k;
// query
$sql = "INSERT INTO products (product_code,product_name,unit,price,supplier,qty,o_price,profit,gen_name,qty_sold,onhand_qty) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:k,:n)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':k'=>$k,':n'=>$n));
header("location: products.php");


?>