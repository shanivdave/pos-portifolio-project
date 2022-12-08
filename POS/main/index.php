<?php include 'header.php'; ?>
<?php include('navfixed.php');?>
<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='admin') {
?>
<div class="container-fluid">
      <div class="row-fluid">
<div class="span2">
             <div class="well sidebar-nav">
                 <ul class="nav nav-list">
              <li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li ><a href="sale.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>
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
			<li><a href="changepss.php"><i class="icon-exchange icon-2x"></i> Change Password</a> </li>
				<br><br>		
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
			<i class    ="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#557157;"><center>FAIR DEAL TIMBER YARD</center></font>    
	
<div id="mainmain">

<a><br>Total Products:<br>
	<?php
				include('../connect.php');
				$resultas = $db->prepare("SELECT count(product_id) from products");
				$resultas->bindParam(':b', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['count(product_id)'];
				echo ($fgfg);
				}
				?>    
	     <i class="icon-list-alt icon-2x"></i></a>               
<a><br>Total Profits:<br> Ksh
	<?php
				include('../connect.php');
				$resultas = $db->prepare("SELECT sum(profit) from sales_order");
				$resultas->bindParam(':b', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['sum(profit)'];
				echo ($fgfg);
				}
				?>
	   <i class="icon-money icon-2x"></i></a>
 
<a><br>Total Sales:<br> Ksh
			<?php
			include('../connect.php');
				$resultas = $db->prepare("SELECT sum(total_amount) from sales_order");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['sum(total_amount)'];
				 echo ($fgfg);
				}
				?>   <i class="icon-money icon-2x"></i>
			</a>    
 
<?php 
    }                   
    ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<footer><center>Brought To You By GITECH HEIGHT</center></footer>
<?php include('footer.php'); ?>
</html>
