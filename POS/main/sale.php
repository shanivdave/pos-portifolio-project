<html>
<head>
<title>
POS
</title>

<?php 
require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      .icon-caret-down{
    float: right;
    margin-top: 12px;
    padding: 0 10px;
		}
 		a{
     	text-decoration: none;
     }
     li{
     	list-style: none;
     }
     .dropdown {
	border: 2px solid white;
	width: 150px;
	height: 90px;
	background-color: white;
	border-radius: .5rem;
	margin-top: 2px;
	}
		.dropdown .nav-link{
	color: blue;
}
		.sidebar-nav ul ul{
        display: none;
     }
     .sidebar-nav ul li:hover .dropdown{
        display:block;
     }
     .sidebar-nav li:hover .icon-caret-down:after{
        content: \2039;
     }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt4').value;
			 var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
				}
			
        }
</script>


 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

<body>
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
           <li ><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active" ><a href="sales.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li ><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>
			<ul class="submenu collapse">
			 <li><a class="nav-link" href="unit.php">Units</a></li> <br>
		   <li><a class="nav-link" href="cat.php">Categories</a></li><br>
		   <li><a class="nav-link" href="products.php">Product Information </a></li><br>
		   <li><a class="nav-link" href="change_cost.php">Change Price </a></li><br> 
		</ul>                                     
	</li>
			<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a>                                    </li>
			<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a>                                    </li>
			<li><a href="purchaseslist.php"><i class="icon-money icon-2x"></i> Purchases</a> <ul class="submenu collapse">
			 <li><a class="nav-link" href="purchasesportal.php">Purchases Portal</a></li> <br>
		</ul>                                   
			</li>
			<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
			<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Product Inventory</a>                </li>
			<li><a href="admin-settings.php"><i class="icon-flag icon-2x"></i> User Manager</a> </li>
			<li><a href="month_chart.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Charts</a>
				<ul class="submenu collapse">
			 <li><a class="nav-link" href="yearly_chart.php">Year Chart</a></li> <br>
		   <li><a class="nav-link" href="chart.php">Category Chart</a></li><br>
		</ul>                
			</li>
			<li ><a href="changepss.php"><i class="icon-exchange icon-2x"></i> Change Password</a> </li>


			<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Sales
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Sales</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales ORDER BY transaction_id ASC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
		
				<div style="text-align:center;">
			Total Number of Sale:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
			</div>
			
			
</div>


<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Students..." autocomplete="off" />
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="12%">Invoice_number </th>
			<th width="14%">Cashier</th>
			<th width="13%"> Date</th>
			<th width="9%"> Type </th>
			<th width="9%">Amount</th>
			<th width="6%"> Profit </th>
			<th width="7%">Due_date </th>
			<th width="6%"> Name </th>
			<th width="6%"> Balance </th>
			<th width="8%"> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales ORDER BY transaction_id ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				
			?>
		
			<td><?php echo $row['invoice_number']; ?></td>
			<td><?php echo $row['cashier']; ?></td>   	
			<td><?php echo $row['date']; ?></td>
	    <td><?php echo $row['type']; ?></td>	
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['profit'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['balance'];?></td>
			<td><a title="Click to view the Product" href="viewhouse.php?id=<?php echo $row['transaction_id']; ?>"><button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
			<a  title="Click to edit the Product" href="editproduct.php?id=<?php echo $row['transaction_id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button> </a>
			<a  href="#" id="<?php echo $row['transaction_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a></td>
			</tr>
			<?php
				}
			?>
		
		
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Product? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>