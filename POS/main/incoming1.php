<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$r = $_POST['vat'];
$date = $_POST['date'];
$month = date('F');
$year = date('Y');

$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$unit=$row['unit'];
$p=$row['profit'];
}

//edit qty
$sql = "UPDATE products 
        SET qty=qty-?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($c,$b));
$fffffff=$asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;
$vat=$d*$r;
$total=$vat+$d;
// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,unit,price,profit,product_code,gen_name,discount,date,omonth,oyear,vat,total_amount) VALUES (:a,:b,:c,:d,:e,:l,:f,:h,:i,:j,:k,:g,:m,:p,:n,:o)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':l'=>$unit,':f'=>$asasa,':h'=>$profit,':i'=>$code,':j'=>$gen,':k'=>$discount,':g'=>$date,':m'=>$month,':p'=>$year,':n'=>$vat,':o'=>$total));
header("location: sales1.php?id=$w&invoice=$a");


?>